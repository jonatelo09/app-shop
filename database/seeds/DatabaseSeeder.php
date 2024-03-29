<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(UsersTableSeeder::class);
		$this->call(ProductsTableSeeder::class);
		$this->call(PaymentPlatformsTableSeeder::class);
		$this->call(CurrenciesTableSeeder::class);
		$this->call(RoleTableSeeder::class);

	}
}