<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'profile_id' => 1,
            'educational_qualification' => 'بكالوريوس إدارة أعمال',
            'educational_institution' => 'جامعة الملك فيصل',
            'study_country' => 'السعودية',
            'study_city' => 'الأحساء',
            'study_start_date' => '2020-09-01',
            'study_end_date' => '2024-05-30',
            'study_description' => 'وصف الدراسة...',
        ]);

        Education::create([
            'profile_id' => 1,
            'educational_qualification' => 'ماستر في التسويق الإلكتروني',
            'educational_institution' => 'جامعة سلطان',
            'study_country' => 'السعودية',
            'study_city' => 'الرياض',
            'study_start_date' => '2018-08-15',
            'study_end_date' => '2020-04-25',
            'study_description' => 'وصف الدراسة...',
        ]);

    }
}
