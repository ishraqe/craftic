<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  
     protected $fillable = array(   'product_id',  'rating',);
}
