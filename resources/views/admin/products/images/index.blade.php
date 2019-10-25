@extends('layouts.principal')

@section('title', 'Imagenes de productos')

@section('body-class', 'product-page')

@section('content')
<div class="page-header header-filter" data-parallax="true"
    style="background-image: url('{{ asset('img/city.jpg') }}')">
</div>
<div class="main main-raised">
    <div class="container">
        <div class="site-section text-center">
            <h2 class="title elemento-4">imagenes de producto "{{$product->name}}"</h2>

            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo" required><br>
                <button type="submit" class="btn btn-success btn-round mt-4">Subir nueva imagen</button>
                <a href=" {{url('/admin/products')}} " class="btn btn-info btn-round mt-4">Regresar</a>
            </form>
            <hr>
            <div class="row">
                @foreach($images as $image)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src=" {{ $image->url }}" style="width: 250px; height: 250px;">
                        </div>
                        <div class="card-footer">
                            <form method="post" action="">
                            {{ csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-danger btn-round">Eliminar</button>
                            @if($image->featured)
                            <button type="button" class="btn btn-primary btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Imagen destacada"><i class="material-icons">favorite</i></button>
                            @else
                                <a href=" {{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-info btn-fab btn-fab-mini btn-round"><i class="material-icons">favorite</i></a>
                                @endif
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div><!-- end section -->
    </div>
</div>
@endsection