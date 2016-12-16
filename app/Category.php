<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
         protected $fillable = array(   'type', 'category_name');

     public function product()
    {
        return $this->hasMany('App\Product');
    }
}
