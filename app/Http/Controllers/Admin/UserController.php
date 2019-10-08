<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {
	public function index() {
		$users = User::paginate(5);
		return view('admin.users.user')->with(compact('users'));
	}
}
