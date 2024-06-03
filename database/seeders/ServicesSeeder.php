<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Quality Properties',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house'
        ]);

        DB::table('services')->insert([
            'name' => 'Top Rated Agent',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house-2'
        ]);

        DB::table('services')->insert([
            'name' => 'Property for Sale',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-building'
        ]);

        DB::table('services')->insert([
            'name' => 'House for Sale',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house-3'
        ]);
    }
}
