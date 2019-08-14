<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //

    public function user()
    {
    	//return $this->belongsToMany(user::class)->withPivot('created_at','updated_at');
    	return $this->belongsToMany(user::class)->withTimestamps();
    }
}
