@extends('layouts.principal')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/landing-page.jpg') }}')">
</div>
<div class="main main-raised">
    <div class="container">
      <div class="site-section text-center">

        <div class="team">
            <div class="row elemento-4">
            <h2 class="title">Productos Disponibles</h2>
            <div class="container-fluid text-center">
            <a href=" {{url('/admin/products/create')}} " class="btn btn-primary btn-round mt-1 mb-3">Nuevo Producto</a>
            </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="col-md-2 text-center">Name</th>
                            <th class="col-md-5 text-center">Description</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-right">Precio</th>
                            <th class="col-md-4 text-right">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $products as $product)
                        <tr>
                            <td class="text-center"> {{ $product->id}} </td>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->description}}</td>
                            <td> {{$product->category ? $product->category->name : 'General'}} </td>
                            <td class="text-right"> {{ $product->price}}</td>
                            <td class="td-actions text-right">
                                <form method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">
                                    @csrf
                                    <a href=" {{url('/products-dos/'.$product->id)}} " rel="tooltip" title="ver detalles" class="btn btn-info btn-sm btn-xs"> <i class="fa fa-info" target="_blank"></i></a>

                                    <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-success btn-sm btn-xs"> <i class="fa fa-edit"></i></a>

                                    <a href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imagenes del Producto" class="btn btn-warning btn-sm btn-xs"> <i class="fa fa-image"></i></a>

                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-success btn-sm btn-xs"><i class="fa fa-times"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $products->links() }}
            </div>
        </div><!-- end team -->
      </div><!-- end section -->
    </div>
  </div>
  @endsection

