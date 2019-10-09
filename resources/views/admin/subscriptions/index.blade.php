@extends('layouts.principal')

@section('title', 'Listado de Subscripciones')

@section('body-class', 'product-page')

@section('content')
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Aspirantes Postulados</h2>
        <div class="team">
        	<div class="row">
        		<table class="table">
        			<thead>
        				<tr>
        					<th class="col-md-2 text-center">ID</th>
        					<th class="col-md-5 text-center">Email</th>
                            <th class="text-right">Opciones</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach( $subscriptions as $subscription)
        				<tr>
        					<td>{{ $subscription->id}}</td>
        					<td>{{ $subscription->email}}</td>
        					<td class="td-actions text-right">
								<form method="post" action="{{url('/admin/subscription/'.$subscription->id.'/delete')}}">
									@csrf

									<button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-sm btn-xs"><i class="fa fa-times"></i></button>
								</form>

        					</td>
        				</tr>
        				@endforeach
        			</tbody>
        		</table>
                {{$subscriptions->links()}}
        	</div>
      	</div><!-- end team -->
      </div><!-- end section -->
    </div>
  </div>
  @endsection