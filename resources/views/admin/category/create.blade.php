@extends('layouts.principal')

@section('title', 'Registro de categorias')

@section('body-class', 'product-page')

@section('content')
<div class="main main-raised">
  <div class="container">
      <div class="section">
        <h2 class="title text-center">Registrar nueva categoria</h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="post" action=" {{ url('/admin/category') }} " enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre de la categoria</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
              </div>
            </div>
            <div class="col-sm-6">
                <label class="control-label">Imagen de la categoria</label>
                <input type="file" name="image">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Icono de la categoria</label>
                <input type="text" class="form-control" name="icono" value="{{old('icono')}}">
              </div>
            </div>
          </div>
          <div class="form-group label-floating">
            <label class="control-label">Descripcion corta de la categoria</label>
            <input type="text" class="form-control" name="description" value="{{old('description')}}">
          </div>

              <button class="btn btn-success">Registrar Categoria</button>
              <a href="{{ url('/admin/category')}}" class="btn btn-info">Cancelar</a>
        </form>
      </div>
    </div>
</div>
@endsection