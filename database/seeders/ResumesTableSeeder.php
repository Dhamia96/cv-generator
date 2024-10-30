<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resume;
class ResumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resume::create([
            'profile_id' => 1,
            'thumbnail' => 'path/to/thumbnail.jpg',
            'resume_title' => 'سيرة ذاتية محدثة',      
            'is_public' => true,
        ]);

        Resume::create([
            'profile_id' => 1,
            'thumbnail' => 'path/to/thumbnail.jpg',
            'resume_title' => ' 2 سيرة ذاتية محدثة',      
            'is_public' => false,
        ]);
    }
}
