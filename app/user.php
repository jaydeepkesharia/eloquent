<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class user extends Model
{
    use Notifiable;
		
    protected $fillable = [
        'name',
    ];

    /*public function passport()
    {
    	return $this->hasOne(passport::class);
    }*/

    /*public function mobile()
    {
     	return $this->hasMany(mobile::class);
    }*/

    public function role()
    {
     	return $this->belongsToMany(role::class);
    }
}
