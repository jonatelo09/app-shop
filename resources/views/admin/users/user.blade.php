@extends('layouts.principal')

@section('title', 'Listado de Aspitantes')

@section('body-class', 'product-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/city.jpg') }}')">
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Lista de Usuarios</h2>
        <div class="team">
        	<div class="row">
        		<table class="table">
        			<thead>
        				<tr>
        					<th class="col-md-2 text-center">Nombre</th>
        					<th class="col-md-5 text-center">Email</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Creacion</th>
                            <th class="text-right">Modificacion</th>
                             <th class="text-right">Opciones</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach( $users as $user)
        				<tr>
        					<td>{{ $user->name}}</td>
        					<td>{{ $user->email}}</td>
                            <td class="text-center">{{ $user->phone}}</td>
                            <td class="text-center">{{ $user->admin}}</td>
                            <td class="text-center">{{ $user->created_at}}</td>
                            <td class="text-center">{{ $user->update_at}}</td>
        					<td class="td-actions text-right">
								<form method="post" action="{{url('/admin/user/'.$user->id.'/delete')}}">
									@csrf

									<button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-sm btn-xs"><i class="fa fa-times"></i></button>
								</form>

        					</td>
        				</tr>
        				@endforeach
        			</tbody>
        		</table>
                {{$users->links()}}
        	</div>
      	</div><!-- end team -->
      </div><!-- end section -->
    </div>
  </div>
  @endsection