<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->update([
       	 
       	    [
        	'name'=>'LG Mobile',
        	'price'=>'10000',
        	'description'=>'A best smart phone of 2021',
        	'category'=>'Mobile',
        	'gallery'=>'https://www.91-img.com/pictures/133188-v4-oppo-f11-mobile-phone-large-1.jpg?tr=q-60',
            ],
            [
        	'name'=>'Samsung Mobile',
        	'price'=>'12000',
        	'description'=>'A samusung best smart phone of 2021',
        	'category'=>'Mobile',
        	'gallery'=>'https://www.91-img.com/pictures/133188-v4-oppo-f11-mobile-phone-large-1.jpg?tr=q-60',
            ],
            [
        	'name'=>'Iphone Mobile',
        	'price'=>'45000',
        	'description'=>'A best iphobe  smart phone of 2021',
        	'category'=>'Mobile',
        	'gallery'=>'https://www.91-img.com/pictures/133188-v4-oppo-f11-mobile-phone-large-1.jpg?tr=q-60',
            ],
      ]);
    }
}
