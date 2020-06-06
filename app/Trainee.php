<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function training() {
    	return $this->belongsTo('App\Training');
    }
}
