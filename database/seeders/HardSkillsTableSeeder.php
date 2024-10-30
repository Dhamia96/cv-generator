<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HardSkill;
class HardSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'profile_id' => 1,
                'hard_skill' => 'تطوير البرمجيات',
                'hard_skill_level' => 'advanced'
            ],
            [
                'profile_id' => 1,
                'hard_skill' => 'تحليل البيانات',
                'hard_skill_level' => 'intermediate'
            ],
            [
                'profile_id' => 1,
                'hard_skill' => 'تصميم جرافيك',
                'hard_skill_level' => 'beginner'
            ],
            // Add more records as needed
        ];

        foreach ($data as $item) {
            HardSkill::create($item);
        }
    }
}
