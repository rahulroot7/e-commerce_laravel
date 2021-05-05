<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	'name'=>'amit Chaurasia',
        	'email'=>'root87@gmail.com',
        	'password'=>Hash::make('1234')
        ]);
    }
}
