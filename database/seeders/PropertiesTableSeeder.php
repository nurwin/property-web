<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            'name' => '5232 California Fake, Ave. 20BC',
            'description' => 'rumah bagus murah di kota',
            'address' => 'California, USA',
            'price' => 1000000.00,
            'picture' => '/images/img_1.jpg',
            'num_of_bed' => 2,
            'num_of_bath' => 2
        ]);

        DB::table('properties')->insert([
            'name' => '5232 California Fake, Ave. 21BC',
            'description' => 'rumah bagus murah di kota',
            'address' => 'California, USA',
            'price' => 1100000.00,
            'picture' => '/images/img_2.jpg',
            'num_of_bed' => 2,
            'num_of_bath' => 2
        ]);

        DB::table('properties')->insert([
            'name' => '5232 California Fake, Ave. 22BC',
            'description' => 'rumah bagus murah di kota',
            'address' => 'California, USA',
            'price' => 1200000.00,
            'picture' => '/images/img_3.jpg',
            'num_of_bed' => 2,
            'num_of_bath' => 2
        ]);
    }
}
