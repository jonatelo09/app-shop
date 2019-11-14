<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo pedido</title>
</head>
<body>
	<p>Se ha realizado un nuevo pedido!</p>
	<p>Estos son los datos de cliente</p>
	<ul class="table-active">
		<li>
			<strong>Nombre: </strong>
			{{ $user->name }}
		</li>
		<li>
			<strong>E-mail:</strong>
			{{ $user->email }}
		</li>
		<li>
			<strong>Phone:</strong>
			{{ $user->phone }}
		</li>

		<li>
			<strong>Fecha de pedido:</strong>
			{{ $cart->oreder_date }}
		</li>
		<li>
			<strong>Direccion:</strong>
			{{$user->address}}
		</li>
	</ul>
	<hr>
	<p>Detalles del pedido:</p>
	<ul>
		@foreach ($cart->details as $detail)
		<li>
			{{ $detail->product->name }} x {{ $detail->quantity}} ($ {{ $detail->quantity * $detail->product->price }} )
		</li>
		@endforeach
	</ul>
	<p>
		<strong>Importe a pagar: </strong> {{ $cart->total }}
	</p>
	<hr>
	<p>
		<a href=" {{url('/admin/orders/'.$cart->id)}} ">Haz clic aquí</a>
		para más información sobre este pedido.
	</p>
</body>
</html>