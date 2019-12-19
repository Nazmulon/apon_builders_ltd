<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSocial extends Model
{
    protected $fillable = [
        'facebook', 'instagram','pinterest','twitter'
    ];
}
