<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
  

| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Route::get('/',function(){
// 	return view('layouts.app');
// });

// Route::get('/master',function(){
// 	return view('layouts.master');
// });

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'index'

]);

Route::get('/product/show/{id}', [
	'uses' => 'ProductController@show',
	'as' => 'show'

]);

Route::get('/shop', [
	'uses' => 'ProductController@shop',
	'as' => 'shop'

]);

Route::get('/product-details', [
	'uses' => 'ProductController@productDetails',
	'as' => 'productDetails'

]);


