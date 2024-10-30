<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'training_course' => 'دورة أ',
            'profile_id' => 1,
            'training_course_start_date' => '2022-01-01',
            'training_course_end_date' => '2022-05-31',
            'training_course_description' => 'وصف الدورة أ',
        ]);

        Course::create([
            'training_course' => 'دورة ب',
            'profile_id' => 1,
            'training_course_start_date' => '2021-03-15',
            'training_course_end_date' => '2021-04-15', 
            'training_course_description' => 'وصف الدورة ب',
        ]);
    }
}
