<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    public function post()
    {
    	return $this->hasManyThrough(post::class,user::class);
    }
}
