<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use DB;

class ProductController extends Controller
{
     public function getIndex()
    {
    	// $product=Product::orderBy('created_at', 'desc')
     //           ->take(4)
     //           ->get();
         $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->select('*')
            ->get(); 
            
         
            
        $cateory=DB::table('categories') 
                ->select('*')
                ->groupBy('category_name')
                ->get(); 

        $brand=DB::table('brands') 
                ->select('*')
                ->get();         
         $recomended = DB::table('products')
            ->join('ratings', 'products.id', '=', 'ratings.product_id')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->select('*')
            ->orderBy('ratings.rating','desc')
            ->take(3)
            ->get();

    	return view('pages.index')->with([
    		'product' => $product,
            'cateory' => $cateory,
            'brand'  => $brand,
            'recomended'=>$recomended
    	]);
    }


    public function show($id){
       
       $product=Product::findOrfail($id);
        $allProduct=Product::all()->take(5);
       $recent=Product::orderBy('created_at','desc')->take(5)->get();
       $related=Product::where('title', 'LIKE', $product->title)->get();
    

    return view('pages.single-product')->with([
        'product' => $product,
        'allProduct'=>$allProduct,
        'recent' => $recent,
        'related'=> $related
    ]);
    }
   
    public function shop(){
    	return view('pages.cart');
    }

    private function getProduct($id){

         $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('*')
            ->where('products.id','=',4)
            ->get();
            

            return $product;
    }
}
