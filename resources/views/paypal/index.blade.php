@extends('layouts.principal')

@section('title', 'App shop | Paypal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="elemento-7">
                <div class="text-left">
                    <h3>Revisa tu Servicio</h3>
                </div>
                <div class="">
                    <div class="row">
                        <table class="table table-active table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center">Direccion del Cliente</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>{{ auth()->user()->name}} </p>
                                        <p>Region 96, calle 34, mz 34, lte 56, 3ra ampliacion</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        <p>A esta direccion el personal de talachaz ira a brindar el servicio</p>
                                    </th>
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

                <div class="">
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
                        <div class="text-left mt-3">
                            <button type="submit" id="payButton" class="btn btn-success btn-lg btn-block">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
