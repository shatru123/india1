<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable=['title','location','description','image','link'];
}
