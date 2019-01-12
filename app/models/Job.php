<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=['f_name',
        'm_name',
        'l_name',
        'dob',
        'email',
        'mobile',
        'gender',
        'mother_tounge',
        'address',
        'state_id',
        'city',
        'district',
        'pin',
        'pan',
        'adhar',
        'def',
        'ph',
        'is_agry',
        'education',

    ];

}
