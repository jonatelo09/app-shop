<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller {
	public function index() {

		$subscriptions = Subscription::paginate(5);

		return view('admin.subscriptions.index')->with(compact('subscriptions'));
	}

	public function store(Request $request) {

		$messages = [
			'email.email' => 'Ingrese un Correo electronico valido',
			'email.required' => 'Es necesario ingresar un correo electronico',
		];
		$rules = [
			'email' => 'email|required',
		];

		$this->validate($request, $rules, $messages);

		$subscription = new Subscription();
		$subscription->email = $request->input('email');
		$subscription->save();

		return redirect('/');
	}
}
