<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Introduction Laravel',
            'Create a Laravel 6 Project',
            'Create Database and Add Environment Credentials',
            'Overview of a Laravel Project',
            'Laravel Basics Review',
        ];
        foreach($titles as $title){
            Lecture::create(
                [
                    'title'=> $title,
                    'date'=>'2023-08-'.rand(1, 31),
                    'course_id'=>'1',
                    'trainer_id'=>'1',
                ]);
        }
            
        
       
    }
}
