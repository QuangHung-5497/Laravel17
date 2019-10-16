<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i <=100 ; $i++) { 
        	$name = $faker->text(50);

        	\Illuminate\Support\Facades\DB::table('products')->insert([
        		'name'=>$name,
        		'slug'=>\Illuminate\Support\Str::slug($name),
        		'origin_price'=>$faker->numberBetween(400000, 800000),
        		'sale_price'=>$faker->numberBetween(400000, 800000),
        		'content'=>$faker->text(200),
        		'status'=>1,
        		'user_id'=>10,
        		'category_id'=>1
        		]);
        }
    }
}
