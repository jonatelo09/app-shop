@extends('layouts.principal')

@section('title', 'App shop | Paypal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class=" elemento-7">
                <div class="text-center">
                    <h3>Detalle de compra</h3>
                </div>
                <div class="">
                    <div class="row">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Talachaz</th>
                                    <th class="text-center">Cantidad</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(auth()->user()->cart->details as $detail)
                                <tr>
                                    <td class="text-center"> <img src="{{ $detail->product->featured_image_url}}" height="50"> </td>
                                    <td>
                                        {{ $detail->product->name}}
                                    </td>
                                    <td>Cantidad: {{$detail->quantity}}</td>
                                    <td>${{$detail->quantity * $detail->product->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th><h2>${{auth()->user()->cart->total}}</h2></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento-7">
                <div class="text-center"><h4>Pago de Talacha</h4></div>

                <div class="text-center">
                    <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 col-md-5">
                                <label>Cantidad a Pagar:</label>
                                <input
                                    class="form-control"
                                    name="value"
                                    value="{{ auth()->user()->cart->total }}"
                                    required
                                    readonly="readonly"
                                >
                                <!--<small class="form-text text-muted">
                                    Use values with up to two decimal positions, using dot "."
                                </small>-->
                            </div>
                            <div class="col-sm-4 col-md-5">
                                <label>Moneda</label>
                                <select class="custom-select" name="currency" required>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Selecciona la plataforma de pago de desees:</label>
                                <div class="form-group" id="toggler">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach ($paymentPlatforms as $paymentPlatform)
                                            <label
                                                class="btn btn-outline-secondary rounded m-2 p-1"
                                                data-target="#{{ $paymentPlatform->name }}Collapse"
                                                data-toggle="collapse"
                                            >
                                                <input
                                                    type="radio"
                                                    name="payment_platform"
                                                    value="{{ $paymentPlatform->id }}"
                                                    required
                                                >
                                                <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}" style="width: 100px; height: 50px;">
                                            </label>
                                        @endforeach
                                    </div>
                                    @foreach ($paymentPlatforms as $paymentPlatform)
                                        <div
                                            id="{{ $paymentPlatform->name }}Collapse"
                                            class="collapse"
                                            data-parent="#toggler"
                                        >
                                            @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-success btn-lg">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
