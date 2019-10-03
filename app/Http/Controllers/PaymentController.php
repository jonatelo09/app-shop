<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Services\PayPalService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mail;

class PaymentController extends Controller {
	public function pay(Request $request) {
		$rules = [
			'value' => ['required', 'numeric', 'min:5'],
			'currency' => ['required', 'exists:currencies,iso'],
			'payment_platform' => ['required', 'exists:payment_platforms,id'],
		];

		$request->validate($rules);

		$paymentPlatform = resolve(PayPalService::class);

		return $paymentPlatform->handlePayment($request);
	}

	public function aprobada() {

		$paymentPlatform = resolve(PayPalService::class);

		return $paymentPlatform->handleAprobada();
	}

	public function update() {
		$client = auth()->user();
		$cart = $client->cart;
		$cart->status = 'Pendiente';
		$cart->oreder_date = Carbon::now();
		$cart->save();

		$admins = User::where('admin', true)->get();
		Mail::to($admins)->send(new NewOrder($client, $cart));

		$notification = 'Tu pedido se ha registrado correctamente';
		return back()->with(compact('notification'));
	}

	public function cancelado() {
		return 'Su orden fue cancelada';
	}
}
