<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Mpmla extends Model
{
    protected $fillable=['name','party','type','gender','city_id','state_id','history','works','bio','photo','avg_rating'];

    public function state()
    {

        return $this->belongsTo(State::class);

    }
    public function city()
    {

        return $this->belongsTo(City::class);

    }

}
