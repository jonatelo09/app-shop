@extends('layouts.principal')

@section('title', 'App shop | Principal')

@section('body-class', 'product-page')

@section('content')
<div class="main main-raised">
    <div class="container">
        <div class="site-section">
            <h2 class="title elemento-4">Carrito</h2>
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
            @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">
                <ul>
                    @foreach (session()->get('success') as $message)
                    <li>{{ $message }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!--<ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="active">
                    <a class="text-danger" href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons text-danger">shopping_cart</i>
                        Carrito de compras
                    </a>
                </li>
                <li class="ml-3">
                    <a class="text-danger" href="#tasks" role="tab" data-toggle="tab">
                        <i class="material-icons tex-danger">list</i>
                        Pedidos realizados
                    </a>
                </li>
            </ul>-->
            <!--<hr>
            <p>
                <h3 class="title text-center">Tu Carrito de compras contiene:
                    {{ auth()->user()->cart->details->count() }} productos.</h3>
            </p>
            <hr>-->
            <div class="row justify-content-center">
                <div class="col-md-10">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th></th>
                                        <th class="text-center"></th>
                                        <th></th>
                                        <th class="text-right">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(auth()->user()->cart->details as $detail)
                                    <tr>
                                        <td class="text-center"> <img src="{{ $detail->product->featured_image_url}}" height="150">
                                        </td>
                                        <td>
                                            <p>
                                                <a class="text-black" href=" {{ url('/products/'.$detail->product->id) }} "
                                                target="_blank">{{ $detail->product->name}}</a>
                                            </p>
                                            <p>{{ $detail->product->description}} </p>
                                            <div class="row">
                                                <p><span class="text-black">Cantidad: </span>{{$detail->quantity}}</p>
                                                <form method="post" action="{{ url('/cart/'.$detail->id.'/delete') }}">
                                                    @csrf
                                                    <!--@method('DELETE')
                                                        <input type="hidden" name="cart_detail_id" value="{‌{ $detail->id }}">-->

                                                    <a href="{{ url('/products-dos/'.$detail->product->id) }}" target="_blank" rel="tooltip"
                                                        title="ver detalles" class="btn btn-link btn-sm btn-xs">Ver Detalles </a>|

                                                    <button type="submit" rel="tooltip" title="Eliminar"
                                                        class="btn btn-link btn-sm btn-xs">Eliminar</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td> {{ $detail->product->price}}</td>
                                        <!--<td class="text-center"> {{$detail->quantity}} </td>
                                        <td>$ {{$detail->quantity * $detail->product->price}}</td>-->
                                        <!--<td class="td-actions">
                                            <form method="post" action="{{ url('/cart/'.$detail->id.'/delete') }}">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="hidden" name="cart_detail_id" value="{‌{ $detail->id }}">

                                                <a href="{{ url('/products-dos/'.$detail->product->id) }}" target="_blank" rel="tooltip"
                                                    title="ver detalles" class="btn btn-info btn-sm btn-xs"> <i
                                                        class="fa fa-info"></i></a>

                                                <button type="submit" rel="tooltip" title="Eliminar"
                                                    class="btn btn-success btn-sm btn-xs"><i class="fa fa-times"></i>
                                                </button>
                                            </form>

                                        </td>-->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <p>El precio y la disponibilidad de los productos de talachaz.com están sujetos a cambio. En el carrito de compras puedes dejar temporalmente los productos que quieras. Aparecerá el precio más reciente de cada producto. </p>
                </div>
                <div class="col-md-2">
                    <div>
                        <p>Subtotal ({{ auth()->user()->cart->details->count() }} productos): ${{auth()->user()->cart->total}}</p>
                    </div>
                    <div class="text-center">
                        @if(auth()->user()->cart->details->count() > 0)
                            <a href="{{url('/payments')}} " class="btn btn-primary btn-round">
                                <i class="material-icons">done</i>Proceder al Pago
                            </a>
                        @endif

                        <!--<form method="post" action=" {{ url('/order')}} ">
                            @csrf
                            <button class="btn btn-primary btn-round">
                                <i class="material-icons">done</i>Relizar pedido
                            </button>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection