<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
        	'name'=>'Admin',
        	'email'=>'admin@admin.com',
        	'password'=>bcrypt('123456'),
        	'created_at'=>\Carbon\Carbon::now(),
        	'updated_at'=>\Carbon\Carbon::now()
        ]);
        $faker = \Faker\Factory::create();
        for ($i=1; $i <=100; $i++) { 
        	\Illuminate\Support\Facades\DB::table('users')->insert([
        		'name'=>$faker->name,
        		'email'=>$faker->email,
        		'password'=>bcrypt('123456'),
        		'created_at'=>\Carbon\Carbon::now(),
        		'updated_at'=>\Carbon\Carbon::now()
        	]);
        }
    }
}
