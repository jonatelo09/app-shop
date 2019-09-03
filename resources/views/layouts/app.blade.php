<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title', config('app.name'))
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('css/material-kit.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--<link rel="stylesheet" href="{{asset('css/estilos.css')}}" />-->
    @yield('style')
    @yield('head')
</head>

<body class="@yield('body-class')">
    <nav class="navbar navbar-transparent navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" {{url('/')}} "> <img src="{{url('img/logomoto.png')}}" style="margin: 0; width: 23.8rem; heigth: 8rem;"> </a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li class="dropdown">
                        <a class="nav-link btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a></h4>
                    </li>
                    @if (Route::has('register'))
                    <li class="dropdown">
                        <a class="nav-link btn btn-success  " href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else  
                    <li class="dropdown btn btn-info">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href=" {{url('/home')}} ">Ir a cesta</a>
                            </li>
                            @if (auth()->user()->admin)
                            <li>
                                <a href=" {{url('/admin/products')}} ">Gestionar Empleados</a>
                            </li>
                            <li>
                                <a href=" {{url('/admin/aspirant')}} ">Gestionar aspirantes</a>
                            </li>
                            <li>
                                <a href=" {{url('/admin/products')}} ">Gestionar productos</a>
                            </li>
                            <li>
                                <a href=" {{url('/admin/category')}} ">Gestionar Categorias</a>
                            </li>
                            @endif
                            <li>
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
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <div class="wrapper">
        @yield('content')
    </div>
    @include('includes.footer')
</body>
<!-- scripts openpay -->
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

@yield('scripts')

</html>