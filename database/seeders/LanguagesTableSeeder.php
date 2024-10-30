<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'profile_id' => 1,
            'language' => 'العربية',
            'language_level' => 'متقدم',

        ]);
        Language::create([
            'profile_id' => 1,
            'language' => 'الإنجليزية',
            'language_level' => 'متوسط',
        ]);
    }
}
