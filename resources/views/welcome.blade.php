@extends('layouts.app')

@section('title','Bienvenido a '. config('app.name'))

@section('body-class','landing-page')

@section('style')
    <style>
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }

        .team .row{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .team .row > [class*='col-']{
            display: flex;
            flex-direction: column;
        }

        .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 222px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }
    </style>
@endsection
@section('content')
<div class="header header-filter" style="background-image: url( {{ asset('img/landing-page.jpg')}} )">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title" style="color: #fff;font-size: 5rem; font-weight: 900; padding-top: -20px;">Bienvenido a {{config('app.name')}} </h1>
                <h1 class="title"></h1>
                <h4 class="text-warning" style="font-weight: 700; font-size: 3rem;">
                </h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Watch video
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-default">
                                <i class="material-icons text-danger">store_mall_directory</i>
                            </div>
                            <h4 class="info-title">Tiendita</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each
                                one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-default">
                                <i class="fa fa-motorcycle motorcycle text-danger"></i><!-- <i class="material-icons text-danger">motorcycle</i> -->
                            </div>
                            <h4 class="info-title">Paqueteria Express</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each
                                one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-default">
                                <i class="material-icons text-danger">local_bar</i>
                            </div>
                            <h4 class="info-title">Cheves</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each
                                one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section text-center">
            <h2 class="title">Visita Nuestras Categorias</h2>
            <form class="form-inline" method="get" action=" {{url('/search')}} ">
                <input type="text" placeholder="¿Qué producto buscas?" class="typeahead form-control" name="query" id="search">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>

            <div class="team">
                <div class="row">
                    @foreach ($categories as $category)      
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src=" {{ $category->featured_image_url }} " alt="imagen representatica de la categoria {{$category->name}} " class="img-raised img-circle" style=" with: 250px">
                                <h4 class="title"><a href=" {{url('/categories/'.$category->id) }} "> {{ $category->name }}</a> <br />
                                </h4>
                                <p class="description"> {{$category->description}} </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="section landing-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">Quieres trabajar con nosotros?</h2>
                    <h4 class="text-center description">Ingresa a nuestro gran equipo de trabajo y se parte de esta gran familia, si eres experto en tu oficio, registra tus datos y nosotros te contactamos.</h4>
                    <form class="contact-form" method="POST" action="{{url('/admin/aspirant')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu Nombre</label>
                                    <input type="text" name="nameFull" class="form-control" required  autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu Email</label>
                                    <input type="email" name="email" class="form-control" required  autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu Telefono</label>
                                    <input type="text" name="phone" class="form-control" required  autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu Oficio</label>
                                    <input type="text" name="oficio" class="form-control" required  autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection

@section('scripts')
    <script src=" {{asset('/js/typeahead.bundle.min.js')}} "></script>
    <script >
        $(function(){
            //
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              // `states` is an array of state names defined in "The Basics"
              prefetch: {
                url: '{{ url('/products/json') }}',
                cache: false
              } 
            });
            //inicializar typeahead sobre nuestro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },{
                name: 'products',
                source: products
            });
        });
    </script>
@endsection