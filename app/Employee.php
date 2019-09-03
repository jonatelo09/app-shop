<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function ocupation()
    {
    	return $this->belongsTo(Ocupation::class);
    }
}
