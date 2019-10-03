@extends('layouts.principal')

@section('title', 'Resultados de busqueda')

@section('body-class', 'profile-page')

<!--@section('styles')
    <style>
        .team {
            padding-bottom: 50px;
        }

        .team .row .col-md-4 {
            margin-bottom: 5em;
        }

        .row{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .row > [class*='col-']{
            display: flex;
            flex-direction: column;
        }
    </style>
@endsection-->
@section('content')
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile text-center">
                    <div class="name text-center">
                        <h3 class="title text-center">Resultado de busqueda</h3>
                    </div>
                </div>
            </div>
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
            <div class="description text-center">
                <p> Se encontraron {{ $products->count()}} resultados para el término {{ $query}}
                </p>
            </div>

            <div class="team text-center">
                <div class="row">
                    @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
                <a href="{{url('/products-dos/'.$product->id) }}">
                  <figure>
                    <img src="{{ $product->featured_image_url }}" alt="Image" class="img-fluid">
                  </figure>
                </a>
              <div class="px-4">
                <h3><a href="{{url('/products-dos/'.$product->id) }}">{{ $product->name }} </a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" type="button" class="mr-2" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon-star text-warning"></span></a> 5.0</span>
                </div>
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