<?php

use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rating=new \App\Rating([
       	'product_id'=>1,
       	'rating'=>5
      
       	]);
       	$rating->save();
       	 $rating=new \App\Rating([
       	'product_id'=>2,
       	'rating'=>5
      
       	]);
       	$rating->save();
       	 $rating=new \App\Rating([
       	'product_id'=>3,
       	'rating'=>5
      
       	]);
       	$rating->save();
       	 $rating=new \App\Rating([
       	'product_id'=>4,
       	'rating'=>5
      
       	]);
       	$rating->save();
    }
    
}
