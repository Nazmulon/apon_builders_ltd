<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featurproperty extends Model
{
    protected $fillable = ['category_id', 'title', 'location', 'area', 'beds', 'baths', 'garage', 'price', 'sale_both', 'name', 'date', 'image' ];
}
