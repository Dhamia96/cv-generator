<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::create([
            'profile_id' => 1,
            'company_name' => 'شركة نادك',
            'job_title' => 'أخصائي التسويق',
            'job_city' => ' الرياض',
            'job_start_date' => '2022-01-01',
            'job_end_date' => '2023-05-31',
            'job_roles' => 'بناء الخطط الاستراتيجية. تحسين محركات البحث الخ',
            'is_current_job' => false,
        ]);


        Career::create([
            'profile_id' => 1,
            'company_name' => 'شركة سابك',
            'job_title' => 'مدير قسم التسويق',
            'job_city' => ' جدة',
            'job_start_date' => '2024-03-15',
            'job_end_date' => null,
            'job_roles' => 'بناء الخطط الاستراتيجية. تحسين محركات البحث الخ',
            'is_current_job' => true,
        ]);

    }
}
