<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['title','date','time','location','description','image','link'];

}
