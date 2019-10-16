<?php

use Illuminate\Database\Seeder;

class UserInfoTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('userinfo')->insert([
        	'full_name'=>'Quang Hung',
        	'user_id'=>1,
        	'address'=>'Ha Noi',
        	'created_at'=>\Carbon\Carbon::now(),
        	'updated_at'=>\Carbon\Carbon::now()
        ]);
    }
}
