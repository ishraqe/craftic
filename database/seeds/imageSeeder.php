<?php

use Illuminate\Database\Seeder;

class imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image=new \App\Image([
       	'product_id'=>1,
       	'image'=>'http://img1.exportersindia.com/product_images/bc-full/dir_104/3114679/apple-mobile-phones-1308287.jpg'
      
       	]);
       	$image->save();
       	 $image=new \App\Image([
       	'product_id'=>1,
       	'image'=>'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS8AxyBej_No8LT0w0J2ry3rw_NUw3Vqo7a7zXtF0r8CbNawrgM'
      
       	]);
       	$image->save();
       	 $image=new \App\Image([
       	'product_id'=>1,
       	'image'=>'http://mobiles.sulekhalive.com/content/mstore/16230477/albums/default/original/iphone6-34r-spgryiphone6plus-34l-spgry-flwr.jpg'
      
       	]);
       	$image->save();
    }
   
}
