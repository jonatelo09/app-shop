@extends('layouts.app')

@section('title', 'App shop | Principal')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/landing-page.jpg') }}');">
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Pagina principal</h2>
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="active">
                    <a href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons">shopping_cart</i>
                        Carrito de compras
                    </a>
                </li>
                <li>
                    <a href="#tasks" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos realizados
                    </a>
                </li>
            </ul>
            <hr>
            <p>
                <h3 class="title text-center">Tu Carrito de compras contiene:
                    {{ auth()->user()->cart->details->count() }} productos.</h3>
            </p>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">image</th>
                        <th class="text-center">Name</th>
                        <th>Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th>SubTotal</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(auth()->user()->cart->details as $detail)
                    <tr>
                        <td class="text-center"> <img src="{{ $detail->product->featured_image_url}}" height="50"> </td>
                        <td><a href=" {{ url('/products/'.$detail->product->id) }} "
                                target="_blank">{{ $detail->product->name}}</a> </td>
                        <td> {{ $detail->product->price}}</td>
                        <td class="text-center"> {{$detail->quantity}} </td>
                        <td>$ {{$detail->quantity * $detail->product->price}}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ url('/cart/'.$detail->id.'/delete') }}">
                                @csrf
                                <!--@method('DELETE')
                                    <input type="hidden" name="cart_detail_id" value="{‌{ $detail->id }}">-->

                                <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" rel="tooltip"
                                    title="ver detalles" class="btn btn-info btn-sm btn-xs"> <i
                                        class="fa fa-info"></i></a>

                                <button type="submit" rel="tooltip" title="Eliminar"
                                    class="btn btn-success btn-sm btn-xs"><i class="fa fa-times"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h2 class="text-right text-primary"><strong>Importe a pagar: $</strong>{{auth()->user()->cart->total}} </h2>

            <div class="text-center">
                <form method="post" action=" {{ url('/order')}} ">
                    @csrf
                    <button class="btn btn-primary btn-round">
                        <i class="material-icons">done</i>Relizar pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection