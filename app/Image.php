<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   protected $fillable = [
        'product_id', 'image', 
    ];

    public function product(){
    	return $this->belongsTo('App\Product','product_id');
    } 

}
