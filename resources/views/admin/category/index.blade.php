@extends('layouts.principal')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city.jpg') }}')">
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="site-section text-center">
        <h2 class="title elemento-4">Categorias Disponibles</h2>
        <div class="team">
        	<div class="row">
        		<a href=" {{url('/admin/category/create')}} " class="btn btn-primary btn-round">Nueva Categoria</a>
        		<table class="table">
        			<thead>
        				<tr>
        					<th class="col-md-2 text-center">Nombre</th>
        					<th class="col-md-5">Description</th>
                            <th>Imagen</th>
                            <th>Icono</th>
                            <th class="text-right">Opciones</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach( $categories as $categori)
        				<tr>
        					<td>{{ $categori->name}}</td>
        					<td>{{ $categori->description}}</td>

                            <td>
                                <img src=" {{ $categori->featured_image_url }} " height="80px" width="60px">
                            </td>
                            <td><span class="text-danger {{ $categori->icono}}"></span> </td>
        					<td class="td-actions text-right">
								<form method="post" action="{{url('/admin/category/'.$categori->id.'/delete')}}">
									@csrf
									<a href="{{url('/categories-dos/'.$categori->id) }}" rel="tooltip" title="ver detalles" class="btn btn-info btn-sm btn-xs "> <i class="fa fa-info"></i></a>

        							<a href="{{url('/admin/category/'.$categori->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-success btn-sm btn-xs"> <i class="fa fa-edit"></i></a>

									<button type="submit" rel="tooltip" title="Eliminar" class="btn btn-success btn-sm btn-xs"><i class="fa fa-times"></i></button>
								</form>

        					</td>
        				</tr>
        				@endforeach
        			</tbody>
        		</table>
                {{$categories->links()}}
        	</div>
      	</div><!-- end team -->
      </div><!-- end section -->
    </div>
  </div>
  @endsection