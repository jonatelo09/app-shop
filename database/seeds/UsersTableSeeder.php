<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'name' => 'Jonatan',
			'email' => 'kuroko.arevalo@gmail.com',
			'phone' => '9983456795',
			'password' => bcrypt('Jonatelo_568923'),
			'admin' => true,
		]);

		User::create([
			'name' => 'Jonatan Arevalo',
			'email' => 'arevalo.jonatan09@outlook.com',
			'phone' => '9981373875',
			'password' => bcrypt('Jonatelo_568923'),
			'admin' => true,
		]);

	}
}
