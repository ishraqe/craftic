<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $brand=new \App\Brand([
       	'brand_name'=>'Apple',
        'category_id' =>1	
      
       	]);

        $brand->save();
        $brand=new \App\Brand([
        'brand_name'=>'Symphony',
        'category_id' =>2 
        ]);

        $brand->save();
        $brand=new \App\Brand([
        'brand_name'=>'Gucci',
        'category_id' =>1 
      
        ]);

        $brand->save();
        $brand=new \App\Brand([
        'brand_name'=>'Lee',
        'category_id' =>1 
      
        ]);

        $brand->save();
    }
}
