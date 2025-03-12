<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin1 = User::create(
            [
                'name' => 'admin1',
                'email' => 'admin1@admin.com',
                'password' => bcrypt('123456'),
            ]   
        );
        $admin1->addMedia(public_path('admin\media\avatars\150-18.jpg'))->preservingOriginal()->toMediaCollection('admins');
        $admin2 = User::create(
                [
                    'name' => 'admin2',
                    'email' => 'admin2@admin.com',
                    'password' => bcrypt('123456'),
                ]   
            );
        $admin2->addMedia(public_path('admin\media\avatars\150-19.jpg'))->preservingOriginal()->toMediaCollection('admins');

    }
}
