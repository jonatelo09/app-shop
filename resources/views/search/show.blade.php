@extends('layouts.app')

@section('title', 'Resultados de busqueda')

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
                        <img src=" {{url('/img/search.png')}} " alt="imagen representativa de la categoria"
                            class="img-circle img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title">Resultado de busqueda</h3>
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
                    @foreach ($products as $product)      
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src=" {{ $product->featured_image_url }} " alt="Thumbnail Image" class="img-raised img-circle" style=" with: 250px">
                                <h4 class="title"><a href=" {{url('/products/'.$product->id) }} "> {{ $product->name }}</a> <br />
                                </h4>
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
@endsection