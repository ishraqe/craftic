<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',  'category_id','brand_id','description','price',
    ];
    //  public function category()
    // {
    //     return $this->belongsTo('App\Category','category_id');
    // }

    // public function brand(){
    //      return $this->belongsTo('App\Brand','brand_id');
    // }
    //  public function image()
    // {
    //     return $this->hasMany('App\Image');
    // }
}
