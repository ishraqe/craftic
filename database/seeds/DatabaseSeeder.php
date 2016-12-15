<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(CategorySeeder::class);
         // $this->call(BrandSeeder::class);
         // $this->call(imageSeeder::class);
         // $this->call(ProductModelSeeder::class);
          $this->call(RatingSeeder::class);
         
    }
}
