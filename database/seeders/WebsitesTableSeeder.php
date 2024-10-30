<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Website;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Website::create([
            'profile_id' => 1,
            'website_name' => 'تويتر',
            'website_link' => 'https://x.com/example',
        ]);

        Website::create([
            'profile_id' => 1,
            'website_name' => 'لنكدإن',
            'website_link' => 'https://www.linkedin.com/in/example/',
        ]);
    }
}
