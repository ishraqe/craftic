<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   
     protected $fillable = array('product_id', 'image');
     
    public function product(){
    	return $this->belongsTo('App\Product','product_id');
    } 

}
