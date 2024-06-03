<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            'name' => "John",
            'type' => "Real Estate, Perorangan",
            'picture' => "/images/person_1-min.jpg",
            'profile' => "Seorang agent real estate yang mempunyai integritas tinggi",
            'instagram_account' => 'instagram.com',
            'twitter_account' => "twitter.com",
            'facebook_account' => "facebook.com",
            'linkedin_account' => "linkedin.com"
        ]);

        DB::table('agents')->insert([
            'name' => "Wicks",
            'type' => "Real Estate, Perorangan",
            'picture' => "/images/person_2-min.jpg",
            'profile' => "Seorang agent real estate yang mempunyai integritas tinggi",
            'instagram_account' => 'instagram.com',
            'twitter_account' => "twitter.com",
            'facebook_account' => "facebook.com",
            'linkedin_account' => "linkedin.com"
        ]);

        DB::table('agents')->insert([
            'name' => "Cenna",
            'type' => "Real Estate, Perorangan",
            'picture' => "/images/person_3-min.jpg",
            'profile' => "Seorang agent real estate yang mempunyai integritas tinggi",
            'instagram_account' => 'instagram.com',
            'twitter_account' => "twitter.com",
            'facebook_account' => "facebook.com",
            'linkedin_account' => "linkedin.com"
        ]);
    }
}
