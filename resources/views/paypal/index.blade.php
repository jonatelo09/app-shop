@extends('layouts.app')

@section('title', 'App shop | Paypal')

@section('body-class', 'product-page')

@section('head')
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" 
        src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
<script type='text/javascript' 
  src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('mzxihnvyyzaox3qvxgvw');
            OpenPay.setApiKey('pk_e50221d8456149dc875ad73ad8b545f5');
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

    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/landing-page.jpg') }}');">
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <div class="bkng-tb-cntnt">
            <div class="pymnts">
                <form action="#" id="payment-form" method="POST">
                    <input id="token_id" name="token_id" type="hidden">
                        <div class="pymnt-itm card active">
                            <h2>
                                Tarjeta de crédito o débito
                            </h2>
                            <div class="pymnt-cntnt">
                                <div class="card-expl">
                                    <div class="credit">
                                        <h4>
                                            Tarjetas de crédito
                                        </h4>
                                    </div>
                                    <div class="debit">
                                        <h4>
                                            Tarjetas de débito
                                        </h4>
                                    </div>
                                </div>
                                <div class="sctn-row">
                                    <div class="sctn-col l">
                                        <label>
                                            Nombre del titular
                                        </label>
                                        <input autocomplete="off" data-openpay-card="holder_name" placeholder="Como aparece en la tarjeta" type="text">
                                        </input>
                                    </div>
                                    <div class="sctn-col">
                                        <label>
                                            Número de tarjeta
                                        </label>
                                        <input autocomplete="off" data-openpay-card="card_number" type="text"/>
                                    </div>
                                </div>
                                <div class="sctn-row">
                                    <div class="sctn-col l">
                                        <label>
                                            Fecha de expiración
                                        </label>
                                        <div class="sctn-col half l">
                                            <input data-openpay-card="expiration_month" placeholder="Mes" type="text"/>
                                        </div>
                                        <div class="sctn-col half l">
                                            <input data-openpay-card="expiration_year" placeholder="Año" type="text"/>
                                        </div>
                                    </div>
                                    <div class="sctn-col cvv">
                                        <label>
                                            Código de seguridad
                                        </label>
                                        <div class="sctn-col half l">
                                            <input autocomplete="off" data-openpay-card="cvv2" placeholder="3 dígitos" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="openpay">
                                    <div class="logo">
                                        Transacciones realizadas vía:<br>
                                    </div>
                                    <div class="shield">
                                        Tus pagos se realizan de forma segura con encriptación de 256 bits
                                    </div>
                                </div>
                                <div class="sctn-row">
                                    <a class="button rght" id="pay-button">
                                        Pagar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </input>
                </form>
            </div>
        </div>
        </div>
        
    </div>
</div>
@endsection
