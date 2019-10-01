<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {
	public function productScore() {
		return $this->belongsTo(Product::class);
	}

	public function productComentary() {
		return $this->belongsTo(Product::class);
	}
}
