<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       $category=new \App\Category([
       	'type'=>1,
       	'category_name'=>'electronics'
      
       	]);

       $category->save();
       $category=new \App\Category([
       	'type'=>2,
       	'category_name'=>'handmade'
      
       	]);

       $category->save();
       $category=new \App\Category([
       	'type'=>3,
       	'category_name'=>'mobile'
      
       	]);

       $category->save();
       $category=new \App\Category([
       	'type'=>4,
       	'category_name'=>'handmade'
      
       	]);

       $category->save();
    }
}
