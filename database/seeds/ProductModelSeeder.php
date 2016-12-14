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
       	'title'=>'Jute',
       	'image'=>'http://crafticarts.com/wp-content/uploads/2016/10/d2_01-259x259.png',
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);

       $product->save();

       $product=new \App\Product([
       	'title'=>'Jute',
       	'image'=>'http://crafticarts.com/wp-content/uploads/2016/10/d2_01-259x259.png',
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);

       $product->save();
       $product=new \App\Product([
       	'title'=>'Jute',
       	'image'=>'http://crafticarts.com/wp-content/uploads/2016/10/d2_01-259x259.png',
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);

       $product->save();
       $product=new \App\Product([
       	'title'=>'Jute',
       	'image'=>'http://crafticarts.com/wp-content/uploads/2016/10/d2_01-259x259.png',
       	'category_id'=>1,
       	'description'=> ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, 				sed do eiusmod tempor incididunt ut labore et dolore 					magna aliqua. Ut enim ad minim veniam,quis nostrud 						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   ',
       	'price'=> 120


       	]);

       $product->save();
    }
}
