<?php

namespace App\Http\Controllers;

use App\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function store(Request $request) {
		$cartDetail = new CartDetail();
		$cartDetail->cart_id = auth()->user()->cart->id;
		$cartDetail->product_id = $request->product_id;
		$cartDetail->quantity = $request->quantity;
		$cartDetail->save();

		$notification = 'El producto se a cargado exitosamente a tu carrito de compras';
		return back()->with(compact('notification'));
	}

	public function destroy($id) {

		$cartDetail = CartDetail::find($id);
		//dd($cartDetail);

		if ($cartDetail->cart_id == auth()->user()->cart->id) ///validad si el id del carrito de compras es del usuario que se logeo
		{
			$cartDetail->delete();
		}

		//dd($cartDetail);
		//dd($request);

		$notification = 'El producto se a eliminado del carrito correctamente';
		return back()->with(compact('notification'));
	}
}
