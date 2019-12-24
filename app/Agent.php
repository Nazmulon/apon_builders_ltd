<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['image', 'name', 'description', 'location', 'email', 'number', 'facebook', 'garage', 'instagram', 'pinterest', 'twitter'];
    
}
