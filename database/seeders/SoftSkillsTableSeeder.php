<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SoftSkill;

class SoftSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'profile_id' => 1,
                'soft_skill' => 'القيادة',
                'soft_skill_level' => 'advanced'
            ],
            [
                'profile_id' => 1,
                'soft_skill' => 'التفاوض',
                'soft_skill_level' => 'intermediate'
            ],
            [
                'profile_id' => 1,
                'soft_skill' => 'القدرة على العمل تحت الضغوط',
                'soft_skill_level' => 'beginner'
            ],
            // Add more records as needed
        ];

        foreach ($data as $item) {
            SoftSkill::create($item);
        }
    }
}
