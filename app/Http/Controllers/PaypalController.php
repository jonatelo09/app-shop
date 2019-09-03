<?php

namespace App\Http\Controllers;

class PaypalController extends Controller
{
	public function index()
	{
		return view('paypal.index');
	}
}
