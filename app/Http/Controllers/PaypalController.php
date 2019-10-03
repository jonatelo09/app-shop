<?php

namespace App\Http\Controllers;
use App\Currency;
use App\PaymentPlatform;

class PaypalController extends Controller {
	public function index() {
		$currencies = Currency::all();
		$paymentPlatforms = PaymentPlatform::all();
		return view('paypal.index')->with([
			'currencies' => $currencies,
			'paymentPlatforms' => $paymentPlatforms,
		]);
	}
}
