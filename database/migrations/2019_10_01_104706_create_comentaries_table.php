<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('comentaries', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('description', 255);

			//FK
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('comentaries');
	}
}
