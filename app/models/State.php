<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
     protected $fillable=['name'];

   public function city()
     {
         return $this->hasMany(City::class,state_id);

     }
}
