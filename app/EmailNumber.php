<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailNumber extends Model
{
    protected $fillable = [
        'a_email', 'a_number'
    ];
}
