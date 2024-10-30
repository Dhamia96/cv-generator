<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'personal_picture' => 'path/to/personal_picture.jpg',
            'first_name' => 'عبدالله',
            'last_name' => 'السعود',
            'gender' => 'male',
            'email' => 'abdullah.saud@example.com',
            'address' => 'شارع الملك فهد',
            'city' => 'الرياض',
            'driving_license' => true,
            'birthday' => '1990-08-25',
            'nationality' => 'سعودي',
            'marital_status' => 'single',
            'achievements' => 'حصول على جائزة أفضل مدير تسويق في عام 2021',
        ]);
    }
}
