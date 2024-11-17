<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        if (User::whereEmail('admin@admin.com')->count() < 1)
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        if (Setting::count() === 0) {
            Setting::create([
                'image' => null,
                'address' => 'Ganeshman Chowk , Surkhet Road -Banke Nepalgunj ',
                'contact_number' => '+977-9848022391',
                'telephone_number' => '081-532883',
                'facebook_url' => null,
                'youtube_url' => null,
                'tiktok_url' => null,
                'map_url' => null,
                'college_name' => 'Nepalgunj Campus',
                'email' => 'official.ncmt@gmail.com',
                'footer_description' => null,
            ]);
        }
    }
}
