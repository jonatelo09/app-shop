@extends('layouts.principal')

@section('title', 'App shop | Principal')

@section('content')
@if (session('notification'))
<div class="alert alert-success elemento-9" role="alert">
    {{ session('notification') }}
</div>
@endif
<div class="site-section bg-light">
      <div class="container">
        <div class="bg-white py-4 mb-4 elemento-9">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="{{$product->featured_image_url}}" alt="Image" class="img-fluid" style="width: 450px; height: 300px;">
            </div>

            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">{{$product->id}}.</span>
              <h3 class="text-black mb-4 font-weight-bold">{{$product->name}} </h3>
              <h5>{{$product->category->name}}</h5>
              <p class="mb-4">{{$product->description}}</p>
              <p>{{$product->long_description}}</p>

              <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Precio:</h3>
                <div class="price form-inline"><del class="mr-2">$269.00</del><h1>${{$product->price}}</h1> </div>
              </div>
              <p>
              	@if(auth()->check())
              	<a href="#" class="btn btn-danger rounded-5 d-block d-lg-inline-block" data-toggle="modal" data-target="#ModalAddCar"><span class="icon-cart-plus text-white"></span></a>
                @else
				<a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                @endif
                <a href="{{url('/home')}}" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver Carrito</a>

              </p>
            </div>
          </div>
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