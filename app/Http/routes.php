<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
  // public function brand(){
    // 	return $this->belongsTo('App\Brand','brand_id');
    // }
    //  public function image()
    // {
    //     return $this->hasMany('App\Image');
    // }

| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'index'

]);

Route::get('/product/show/{id}', [
	'uses' => 'ProductController@showdetails',
	'as' => 'show'

]);

Route::get('/shop', [
	'uses' => 'ProductController@shop',
	'as' => 'shop'

]);

