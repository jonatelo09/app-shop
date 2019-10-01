<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Talachaz &mdash; MultiServicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('selling/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('selling/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('selling/css/style.css')}}">

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

    <div class=" py-1 bg-light" id="home-section">
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
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">9983456795</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">servicios@talachaz.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2 contenedor">
            <h1 class="mb-0 site-logo maquina"><a href="{{url('/')}} " class="text-black mb-0 parpadeo"><span class="text-primary  icon-format_size"></span>
              Talachaz<span class="text-primary">.</span>com <span class="maquina-esc">&#160;</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    @guest
                    <li><a href="{{url('/')}} " class="nav-link">Home</a></li>

                    <li class="dropdown nav-link">
                      <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Categorias<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                            <li class="ml-2 col-auto">
                                <a href="#">Mecanica</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a href="#">Albañileria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a href="#">Plomeria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a href="#">Herreria</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a href="#">Electrico</a>
                            </li>
                            <li class="ml-2 col-auto">
                                <a href="#">Aires Acondicionado</a>
                            </li>
                        </ul>

                    </li>

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
                                <a href="#">Mecanica</a>
                            </li>
                            <li class="ml-2">
                                <a href="#">Albañileria</a>
                            </li>
                            <li class="ml-2">
                                <a href="#">Plomeria</a>
                            </li>
                            <li class="ml-2">
                                <a href="#">Herreria</a>
                            </li>
                            <li class="ml-2">
                                <a href="#">Electrico</a>
                            </li>
                            <li class="ml-2">
                                <a href="#">Aires Acondicionado</a>
                            </li>
                        </ul>

                    </li>
                    <li class="dropdown nav-link">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu" role="menu">
                            <li class="ml-2">
                                <a href=" {{url('/home')}} ">Ir a cesta</a>
                            </li>
                            @if (Auth::user())
                            <li class="ml-2">
                                <a href=" {{url('/admin/products')}} ">Gestionar Empleados</a>
                            </li>
                            <li class="ml-2">
                                <a href=" {{url('/admin/aspirant')}} ">Gestionar aspirantes</a>
                            </li>
                            <li class="ml-2">
                                <a href=" {{url('/admin/products')}} ">Gestionar productos</a>
                            </li>
                            <li class="ml-2">
                                <a href=" {{url('/admin/category')}} ">Gestionar Categorias</a>
                            </li>
                            @endif
                            <li class="ml-2">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
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


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript"src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        OpenPay.setId('mzdtln0bmtms6o3kck8f');
        OpenPay.setApiKey('pk_f0660ad5a39f4912872e24a7a660370c');
        OpenPay.setSandboxMode(true);
        //Se genera el id de dispositivo
        var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

        $('#pay-button').on('click', function(event) {
            event.preventDefault();
            $("#pay-button").prop( "disabled", true);
            OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
        });

        var sucess_callbak = function(response) {
          var token_id = response.data.id;
          $('#token_id').val(token_id);
          $('#payment-form').submit();
        };

        var error_callbak = function(response) {
            var desc = response.data.description != undefined ? response.data.description : response.message;
            alert("ERROR [" + response.status + "] " + desc);
            $("#pay-button").prop("disabled", false);
        };

    });
</script>

<!--   Core JS Files   -->
<script src="{{asset('js/calificacion.js')}} " type="text/javascript"></script>
<script src="{{asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<!-- <script src="{{asset('/js/all.js') }}" type="text/javascript"></script> -->
<script src="{{asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/material.min.js') }}" type="text/javascript"></script>
<!--<script src="{{asset('/js/plugins/moment.min.js') }}"></script>-->
<!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('/js/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=woZxPTP2zYfPTZyhitZBmI4aY3usK8uGNdbZRx6L9bM="></script> -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/js/material-kit.js') }}" type="text/javascript"></script>
<script
    src="https://www.paypal.com/sdk/js?client-id=Ae25n5sL9QcXlgxRNUXf-9-elTt5E1bMInP7r_b9sFXMu_WFtZomnWspWotr4GRm0xl2vLyoshMXEsmy">
</script>

  </body>
</html>