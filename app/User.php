<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'phone', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function carts() {
		return $this->hasMany(Cart::class);
	}
	//cart_id
	public function getCartAttribute() {
		$cart = $this->carts()->where('status', 'Active')->first();
		if ($cart) {
			return $cart;
		}

		//else
		$cart = new Cart();
		$cart->status = 'Active';
		$cart->user_id = $this->id;
		$cart->save();

		return $cart;
	}

	public function roles() {
		return $this->belongsToMany(Role::class)->withTimestamps();
	}
}
