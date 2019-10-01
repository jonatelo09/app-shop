@extends('layouts.app')

@section('title', 'App shop | Principal')

@section('body-class', 'profile-page')

@section('styles')
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
@endsection
@section('content')
<div class="header header-filter" style="background-image: url('/img/landing-page.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        <img src=" {{$category->featured_image_url}} " alt="imagen representativa de la categoria {{$category->name}} "
                            class="img-circle img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title"> {{ $category->name}} </h3>
                    </div>
                </div>
            </div>
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
            <div class="description text-center">
                <p> {{$category->description}}
                </p>
            </div>

            <div class="team text-center">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src=" {{ $product->featured_image_url }} " alt="Thumbnail Image" class="img-raised img-circle" style=" with: 250px">
                                <h3 class="title"><a href=" {{url('/products/'.$product->id) }} "> {{ $product->name }}</a> <br />
                                </h3>
                                <h2 class="text-info">${{$product->price}} </h2>
                                <p class="description"> {{$product->description}} </p>
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

<!-- Modal Añadir a carrito-->
<div class="modal fade" id="ModalAddCar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Seleccione la catidad de desea añadir</h4>
            </div>
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

<!-- Modal Comprar -->
<!--<div class="modal fade" id="ModalComprar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Seleccione la catidad para comprar</h4>
            </div>
            <div class="modal-body">
                <input type="number" name="quantity" value="1" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Comprar</button>
            </div>
        </div>
    </div>
</div>-->
@endsection