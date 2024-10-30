<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::create([
            'profile_id' => 1,
            'certificate_name' => 'الشهادة أ',
            'certificate_start_date' => '2022-01-01',
            'certificate_end_date' => '2022-05-31',
            'certificate_description' => 'وصف الشهادة أ',
        ]);

        Certificate::create([
            'profile_id' => 1,
            'certificate_name' => 'الشهادة ب',
            'certificate_start_date' => '2021-03-15',
            'certificate_end_date' => '2021-04-15', 
            'certificate_description' => 'وصف الشهادة ب',
        ]);
    }
}
