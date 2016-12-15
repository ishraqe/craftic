<?php

use Illuminate\Database\Seeder;

class ProductModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product=new \App\Product([
       	'title'=>'Apple 6',
       	'category_id'=>1,
        'brand_id' => 1,
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);
       $product->save();

       $product=new \App\Product([
       	'title'=>'Symphony a12',
       	'category_id'=>2,
        'brand_id' => 2,
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);

       $product->save();
       $product=new \App\Product([
        'title'=>'Symphony a1',
        'category_id'=>2,
        'brand_id' => 2,
        'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit,         sed do eiusmod tempor incididunt ut labore et dolore          magna aliqua. Ut enim ad minim veniam,quis nostrud            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
        'price'=> 120


        ]);

       $product->save();
       $product=new \App\Product([
        'title'=>'Symphony a1',
        'category_id'=>2,
        'brand_id' => 2,
        'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit,         sed do eiusmod tempor incididunt ut labore et dolore          magna aliqua. Ut enim ad minim veniam,quis nostrud            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
        'price'=> 120


        ]);

       $product->save();
       $product=new \App\Product([
        'title'=>'Symphony e6',
        'category_id'=>2,
        'brand_id' => 2,
        'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit,         sed do eiusmod tempor incididunt ut labore et dolore          magna aliqua. Ut enim ad minim veniam,quis nostrud            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
        'price'=> 120


        ]);

       $product->save();
       $product=new \App\Product([
        'title'=>'Symphony e5',
        'category_id'=>2,
        'brand_id' => 2,
        'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit,         sed do eiusmod tempor incididunt ut labore et dolore          magna aliqua. Ut enim ad minim veniam,quis nostrud            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
        'price'=> 120


        ]);

       $product->save();
       
    }
}
