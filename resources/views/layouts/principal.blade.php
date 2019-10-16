<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Talachaz &mdash; MultiServicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('selling/fonts/icomoon/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('selling/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('selling/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('selling/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/style.css')}}">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @stack('styles') -->

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- <div class=" py-1 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3 text-danger"><a href="tel://#"> <span class="icon-phone mr-2 text-danger" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">9983456795</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2 text-danger" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">servicios@talachaz.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div> -->

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2 contenedor">
            <h1 class="mb-0 site-logo"><a href="{{url('/')}} " class="text-black mb-0 text-cursiva"><!--<span class="text-danger  icon-format_size"></span>-->
              Talachaz<span class="text-danger">.</span>com <!--<span class="">&#160;</span>--> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    @guest
                    <li><a href="{{url('/')}} " class="nav-link">Home</a></li>

                    <!-- <li class="dropdown nav-link">
                      <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Categorias<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Mecanica</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Albañileria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Plomeria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Herreria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Electrico</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a class="text-danger" href="#">Aires Acondicionado</a>
                            </li>
                        </ul>

                    </li> -->
                    <li><a href="#services-section" class="nav-link">Categorias</a></li>

                    <li><a href="#about-section" class="nav-link">Nosotros</a></li>
                    <!--<li><a href="#special-section" class="nav-link">Special</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                    <li><a href="#blog-section" class="nav-link">Blog</a></li>-->
                    <li><a href="#contact-section" class="nav-link">Contactanos</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @else
                    <li><a href="{{url('/')}} " class="nav-link">Home</a></li>
                    <li class="dropdown nav-link">
                      <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Categorias<span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu col-md-6" role="menu">
                            <li class="ml-2">
                                <a class="text-danger" href="#">Mecanica</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href="#">Albañileria</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href="#">Plomeria</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href="#">Herreria</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href="#">Electrico</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href="#">Aires Acondicionado</a>
                            </li>
                        </ul>

                    </li>
                    <li class="dropdown nav-link">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu" role="menu">
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/home')}} ">Ir a cesta</a>
                            </li>
                            @if (Auth::user()->admin)
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/admin/products')}} ">Gestionar Empleados</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/admin/aspirant')}} ">Gestionar aspirantes</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/admin/products')}} ">Gestionar productos</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/admin/category')}} ">Gestionar Categorias</a>
                            </li>
                            <li class="ml-2">
                                <a class="text-danger" href=" {{url('/admin/user')}} ">Gestionar Usuarios</a>
                            </li>
                            @endif
                            <li class="ml-2">
                                <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                     <li><a href="{{url('/home')}} " class="nav-link"> <i class="material-icons">shopping_cart</i></a></li>
                    @endguest
                </ul>
            </nav>
          </div>


        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>
    <div class="site-wrap">@yield('content')</div>
     @include('includes.footerdos')
  </div> <!-- .site-wrap -->

  <script src="{{asset('selling/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery-ui.js')}}"></script>
  <script src="{{asset('selling/js/popper.min.js')}}"></script>
  <script src="{{asset('selling/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('selling/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('selling/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('selling/js/aos.js')}}"></script>
  <script src="{{asset('selling/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('selling/js/jquery.sticky.js')}}"></script>


  <script src="{{asset('selling/js/main.js')}}"></script>


  <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

<!--   Core JS Files   -->
<script src="{{asset('js/calificacion.js')}} " type="text/javascript"></script>
<!-- <script src="{{asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/all.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/plugins/moment.min.js') }}"></script>
Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker
<script src="{{asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/
<script src="{{asset('/js/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/material-kit.js') }}" type="text/javascript"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @stack('scripts') -->

  </body>
</html>