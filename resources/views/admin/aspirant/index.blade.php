@extends('layouts.app')

@section('title', 'Listado de Aspitantes')

@section('body-class', 'product-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city.jpg') }}')">
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Aspirantes Postulados</h2>
        <div class="team">
        	<div class="row">
        		<a href=" {{url('/admin/aspirant/create')}} " class="btn btn-primary btn-round">Nuevo aspirante</a>
        		<table class="table">
        			<thead>
        				<tr>
        					<th class="col-md-2 text-center">Nombre</th>
        					<th class="col-md-5">Email</th>
                            <th>Telefono</th>
                            <th>Oficio</th>
                            <th class="text-right">Opciones</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach( $aspitantes as $aspirant)
        				<tr>
        					<td>{{ $aspirant->nameFull}}</td>
        					<td>{{ $aspirant->email}}</td>
                            <td>{{ $aspirant->phone}}</td>
                            <td>{{ $aspirant->oficio}}</td>
        					<td class="td-actions text-right">
								<form method="post" action="{{url('/admin/aspirant/'.$aspirant->id.'/delete')}}">
									@csrf
									<a href="{{url('/aspirant/'.$aspirant->id) }}" rel="tooltip" title="ver detalles" class="btn btn-info btn-sm btn-xs "> <i class="fa fa-info"></i></a>

        							<a href="{{url('/admin/aspirant/'.$aspirant->id.'/edit')}}" rel="tooltip" title="Editar producto" class="btn btn-success btn-sm btn-xs"> <i class="fa fa-edit"></i></a>
                                    
									<button type="submit" rel="tooltip" title="Eliminar" class="btn btn-success btn-sm btn-xs"><i class="fa fa-times"></i></button>
								</form>
        						
        					</td>
        				</tr>
        				@endforeach
        			</tbody>
        		</table>
                {{$aspirantes->link()}}
        	</div>
      	</div><!-- end team -->
      </div><!-- end section -->
    </div>
  </div>
  @endsection