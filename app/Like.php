<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function word() {
    	return $this->belongsTo('App\Word');
	}
}
