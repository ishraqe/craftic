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
Route::get('/add-to-cart/{id}',[
	'uses'=>'ProductController@getAddToCArt',
	'as' => 'product.addToCart'
]);

Route::get('/shopping-cart',[
	'uses'=>'ProductController@getCart',
	'as' => 'product.shoppingCart'
]);
Route::get('/cart',function(){
	return view('pages.cart');
});
Route::get('/check',function(){
	return view('pages.checkout');
});




