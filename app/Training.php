<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function trainee() {
    	return $this->hasMany('App\Trainee');
    }
}
