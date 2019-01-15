<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{


    protected $fillable=['institute_name','program','shift','timing','level_of_course','courses','university_id','state_id','city_id','nacc_grade','nba_grade','website','photo','established_year'];

    public function state()
    {

        return $this->belongsTo(State::class);

    }
    public function city()
    {

        return $this->belongsTo(City::class);

    }
}
