<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainer1 = Trainer::create(
            [
                'name' => 'Jane Doe',
                'bio' => 'Jane Doe bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0591111111',
                'email' => 'jane@example.com',
            ]   
        );
        $trainer1->courses()->attach(Course::find(1));
        $trainer1->courses()->attach(Course::find(2));
        $trainer1->addMedia(public_path('admin\media\avatars\150-1.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer2 =Trainer::create(
            [
                'name' => 'mark zuckerberg',
                'bio' => 'mark zuckerberg bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0592222222',
                'email' => 'mark@example.com',
            ]
        );    
        $trainer2->courses()->attach(Course::find(1));
        $trainer2->courses()->attach(Course::find(3));
        $trainer2->addMedia(public_path('admin\media\avatars\150-2.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer3 = Trainer::create(
            [
                'name' => 'steve jobs',
                'bio' => 'steve jobs bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0593333333',
                'email' => 'steve@example.com',
            ]
        );  
        $trainer3->addMedia(public_path('admin\media\avatars\150-3.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer3->courses()->attach(Course::find(3));
        $trainer4 = Trainer::create(
            [
                'name' => 'elon musk',
                'bio' => 'elon musk bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0594444444',
                'email' => 'elon@example.com',
            ]
        );    
        $trainer4->addMedia(public_path('admin\media\avatars\150-4.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer4->courses()->attach(Course::find(2));
        $trainer4->courses()->attach(Course::find(3));
        $trainer5= Trainer::create(
            [
                'name' => 'bill gates ',
                'bio' => 'bill gates bio ',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0595555555',
                'email' => 'bill@example.com',
            ]
        );
        $trainer5->addMedia(public_path('admin\media\avatars\150-5.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer5->courses()->attach(Course::find(1));
        $trainer5->courses()->attach(Course::find(3));
        $trainer6 = Trainer::create(
            [
                'name' => 'Jane Doe1',
                'bio' => 'Jane Doe1 bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0596666666',
                'email' => 'jane1@example.com',
            ]   
        );
        $trainer6->addMedia(public_path('admin\media\avatars\150-6.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer6->courses()->attach(Course::find(1));
        $trainer7 =Trainer::create(
            [
                'name' => 'mark zuckerberg1',
                'bio' => 'mark zuckerberg1 bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0597777777',
                'email' => 'mark1@example.com',
            ]
        );    

        $trainer7->addMedia(public_path('admin\media\avatars\150-7.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer8 = Trainer::create(
            [
                'name' => 'steve jobs1',
                'bio' => 'steve jobs1 bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0598888888',
                'email' => 'steve1@example.com',
            ]
        );  
        $trainer8->addMedia(public_path('admin\media\avatars\150-8.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer9 = Trainer::create(
            [
                'name' => 'elon musk1',
                'bio' => 'elon musk1 bio',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0599999999',
                'email' => 'elon1@example.com',
            ]
        );    
        $trainer9->addMedia(public_path('admin\media\avatars\150-9.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer10= Trainer::create(
            [
                'name' => 'bill gates1 ',
                'bio' => 'bill gates1 bio ',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '0591010101',
                'email' => 'bill1@example.com',
            ]
        );
        $trainer10->addMedia(public_path('admin\media\avatars\150-10.jpg'))->preservingOriginal()->toMediaCollection('trainers');
        $trainer11= Trainer::create(
            [
                'name' => 'bill gates2 ',
                'bio' => 'bill gates2 bio ',
                'specilization' => 'specilization',
                'fields' => 'field 1,field 2,field 3,field 4,',
                'hobbies' => 'hobby 1,hobby 2,hobby 3,hobby 4,',
                'skills' => 'skill 1,skill 2,skill 3,skill 4,',
                'projects' => 'project 1,project 2,research 1,research 2,',
                'address' => 'address street',
                'phone' => '05910111011',
                'email' => 'bill2@example.com',
            ]
        );
        $trainer11->addMedia(public_path('admin\media\avatars\150-11.jpg'))->preservingOriginal()->toMediaCollection('trainers');
      
    }
}
