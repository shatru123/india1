<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['title','location','image','description'];
}
