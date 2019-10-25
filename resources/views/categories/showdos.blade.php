@extends('layouts.principal')

@section('title', 'App shop | Principal')

@section('content')
<div class="site-section" id="products-section">
      <div class="container elemento-4">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="section-title mb-3">{{ $category->name}}</h2>
            <p>{{$category->description}}</p>
          </div>
        </div>
        <div class="row">
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            	<a href="{{url('/products-dos/'.$product->id) }}">
	              <figure>
	                <img src="{{ $product->featured_image_url }}" alt="Image" class="img-fluid" style="width: 250px; height: 250px;">
	              </figure>
              	</a>
              <div class="px-4">
                <h3><a href="{{url('/products-dos/'.$product->id) }}">{{ $product->name }} </a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" type="button" class="mr-2" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon-star text-warning"></span></a> 5.0</span>
                </div>
                 <h3 class="mb-4">${{ $product->price }} </h3>
                <p class="mb-4">{{ $product->description }} </p>
                <div>
                  @if(auth()->check())
	              	<a href="#" class="btn btn-danger rounded-5 d-block d-lg-inline-block" data-toggle="modal" data-target="#ModalAddCar"><span class="icon-cart-plus text-white"></span></a>
	                @else
					<a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
	                @endif
                  	<a href="{{url('/products-dos/'.$product->id) }}" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver Detalles</a>
                </div>
              </div>
            </div>

          </div>
          @endforeach
        </div>
        <div class="text-center">
            {{ $products->links() }}
        </div>
      </div>
    </div>
<!-- Modal Añadir a carrito -->
    <div class="modal fade" id="ModalAddCar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title" id="myModalLabel">Seleccione la catidad de desea añadir</h5>
                </div>
                <div class="modal-body">
                <form method="post" action=" {{ url('/cart')}} ">
                    @csrf
                    <input type="hidden" name="product_id" value=" {{ $product->id }} ">
                    <div class="modal-body">
                        <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info btn-simple">Añadir al Carrito</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection