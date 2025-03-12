<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainee1 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'First trainee',
                'name_ar'=>'المتدرب الأول',
                'university_id'=> rand(100000, 999999),
                'job' => 'مهندس برمجيات',
                'POB' => 'فلسطين',
                'DOB' => '2000-08-02',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'متزوج',
                'job_status' => 'حكومي',
                'current_job' => 'مبرمج',
                'blood' => 'A+',
                'job_title' => 'مبرمج مواقع انترنت',
                'health_status' => 'سليم',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'شركة تك شيف',
                'closest_university' => 'شارع 1',
                'neighborhood' => 'حي 1',
                'street' => 'شارع 1',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'first@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2014',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'علمي',
                'grades' => '600',

                'status' => 'نظامي',
    
            ]   
        );
        $trainee1->courses()->attach(Course::find(1));
        $trainee1->addMedia(public_path('admin\media\avatars\150-12.jpg'))->preservingOriginal()->toMediaCollection('trainees');

        $trainee2 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'Second trainee',
                'name_ar'=>'المتدرب الثاني',
                'university_id'=> rand(100000, 999999),
                'job' => 'مهندس ميكاترونكس',
                'POB' => 'فلسطين',
                'DOB' => '2001-07-12',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'أعزب',
                'job_status' => 'خاص',
                'current_job' => 'مهندس أنظمة تحكم',
                'blood' => 'AB+',
                'job_title' => 'مهندس ميكاترونكس',
                'health_status' => 'مصاب',
                'injury_type' => 'حركي',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'مسجد 1',
                'closest_university' => 'شارع 2',
                'neighborhood' => 'حي 2',
                'street' => 'شارع 2',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'second@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2016',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'أدبي',
                'grades' => '648',

                'status' => 'نظامي',
            ]   
        );
        $trainee2->courses()->attach(Course::find(1));
        $trainee2->courses()->attach(Course::find(2));
        $trainee2->addMedia(public_path('admin\media\avatars\150-13.jpg'))->preservingOriginal()->toMediaCollection('trainees');

        $trainee3 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'Third trainee',
                'name_ar'=>'المتدرب الثالث',
                'university_id'=> rand(100000, 999999),
                'job' => 'UI/UX',
                'POB' => 'فلسطين',
                'DOB' => '1994-05-27',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'متزوج',
                'job_status' => 'خاص',
                'current_job' => 'مصمم',
                'blood' => 'O+',
                'job_title' => 'مهندس برمجيات',
                'health_status' => 'مريض',
                'disease_type' => 'مزمن',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'مسجد 2',
                'closest_university' => 'شارع 3',
                'neighborhood' => 'حي 3',
                'street' => 'شارع 4',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'third@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2012',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'عملي',
                'grades' => '737',

                'status' => 'نظامي',
            ]   
        );
        $trainee3->courses()->attach(Course::find(3));
        $trainee3->addMedia(public_path('admin\media\avatars\150-14.jpg'))->preservingOriginal()->toMediaCollection('trainees');

        $trainee4 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'Fourth trainee',
                'name_ar'=>'المتدرب الرابع',
                'university_id'=> rand(100000, 999999),
                'job' => 'مهندس مدني',
                'POB' => 'فلسطين',
                'DOB' => '1998-02-21',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'اعزب',
                'job_status' => 'طالب',
                'current_job' => 'طالب',
                'blood' => 'B-',
                'job_title' => 'مهندس',
                'health_status' => 'سليم',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'مسجد 3',
                'closest_university' => 'شارع 4',
                'neighborhood' => 'حي 4',
                'street' => 'شارع 5',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'fourth@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2016',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'عملي',
                'grades' => '721',

                'status' => 'نظامي',
            ]   
        );
        $trainee4->courses()->attach(Course::find(1));
        $trainee4->addMedia(public_path('admin\media\avatars\150-15.jpg'))->preservingOriginal()->toMediaCollection('trainees');

        $trainee5 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'Fifth trainee',
                'name_ar'=>'المتدرب الخامس',
                'university_id'=> rand(100000, 999999),
                'job' => 'تعليم أساسي',
                'POB' => 'فلسطين',
                'DOB' => '1996-08-06',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'اعزب',
                'job_status' => 'حكومي',
                'current_job' => 'معلم',
                'blood' => 'A-',
                'job_title' => 'معلم',
                'health_status' => 'سليم',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'مسجد 5',
                'closest_university' => 'شارع 6',
                'neighborhood' => 'حي 7',
                'street' => 'شارع 7',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'fifth@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2014',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'أدبي',
                'grades' => '655',

                'status' => 'نظامي',
            ]   
        );
        $trainee5->courses()->attach(Course::find(1));
        $trainee5->courses()->attach(Course::find(2));
        $trainee5->addMedia(public_path('admin\media\avatars\150-16.jpg'))->preservingOriginal()->toMediaCollection('trainees');

        $trainee6 = Trainee::create(
            [
                'trainee_id' => rand(100000, 999999),
                'name_en' =>'Sixth trainee',
                'name_ar'=>'المتدرب السادس',
                'university_id'=> rand(100000, 999999),
                'job' => 'مدير اعمال',
                'POB' => 'فلسطين',
                'DOB' => '1995-12-13',
                'identity' => rand(100000000, 999999999),
                'marital_status' => 'متزوج',
                'job_status' => 'خاص',
                'current_job' => 'مدير',
                'blood' => 'AB-',
                'job_title' => 'مدير اعمال',
                'health_status' => 'سليم',
                'state' => 'فلسطين',
                'city' => 'غزة',
                'closest_place' => 'مسجد 6',
                'closest_university' => 'شارع 7',
                'neighborhood' => 'حي 8',
                'street' => 'شارع 8',
                'phone' => '28'.rand(10000, 99999),
                'mobile1' => '059'.rand(1000000, 9999999),
                'mobile2' => '059'.rand(1000000, 9999999),
                'email' => 'sixth@gmail.com',

                'seat_number' => rand(10000000, 99999999),
                'institution' => 'مدرسة فلسطين الثانوية للبنين',
                'year' => '2013',
                'GPA' => rand(60,99) ,
                'certificate_type' => 'أدبي',
                'grades' => '784',

                'status' => 'نظامي',
            ]   
        );
        $trainee6->courses()->attach(Course::find(3));
        $trainee6->addMedia(public_path('admin\media\avatars\150-17.jpg'))->preservingOriginal()->toMediaCollection('trainees');
    }
}
