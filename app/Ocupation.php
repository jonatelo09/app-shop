<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocupation extends Model
{
    public function employee()
    {
    	return $this->hasMany(Employee::class);
    }
}
