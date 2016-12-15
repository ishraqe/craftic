<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'type', 'category_name',
       ];  

     public function product()
    {
        return $this->hasMany('App\Product');
    }
}
