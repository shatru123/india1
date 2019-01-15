<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SocialLogin extends Model
{

    protected $fillable =['name','email','google_id','password'];
}
