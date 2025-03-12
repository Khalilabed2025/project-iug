<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course1 = Course::create(
            [
                'title'=>'Laravel',
                'desc'=>'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
                'program_nature'=>'طبيعة البرنامج الأول',
                'objectives'=>'Lreaning the Basics of Laravel Framework',
                'field' => 'Field',
                'references'=> 'references Section',
                'start_date' => '2023/06/01',
                'end_date' => '2023/09/01',
                'time' => 'صباحية',
                'hours' => 60,
                'lectures_number' => 25,
                'supervisor' => 'supervisor',
                'destination'=> 'University Students',
                'beneficiary'=> 'الجهة 1',
                'capacity' => 100,
                'requirments'=> 'PHP Basics',
                'price' => 150,
                'location' => 'غزة',
                'user_id' => 1,
                'status' => 'جاري',
            ]   
        ); 
        $course1->addMedia(public_path('admin\media\svg\brand-logos\plurk.svg'))->preservingOriginal()->toMediaCollection('courses');

        $course2 = Course::create(
            [
                'title'=>'ASP.NET',
                'desc'=>'.NET is a developer platform made up of tools, programming languages, and libraries for building many different types of applications',
                'program_nature'=>'طبيعة البرنامج الثاني',
                'objectives'=>'Lreaning the Basics of .NET Framework',
                'field' => 'Field',
                'references'=> 'references Section',
                'start_date' => '2023/01/01',
                'end_date' => '2023/06/01',
                'time' => 'مسائية',
                'hours' => 40,
                'lectures_number' => 18,
                'supervisor' => 'supervisor',
                'destination'=> 'University Students',
                'beneficiary'=> 'الجهة 2',
                'capacity' => 80,
                'requirments'=> '.NET Basics',
                'price' => 200,
                'location' => 'غزة',
                'user_id' => 1,
                'status' => 'جاري',
            ]   
        );    
        $course2->addMedia(public_path('admin\media\svg\brand-logos\disqus.svg'))->preservingOriginal()->toMediaCollection('courses');

        $course3 = Course::create(
            [
                'title'=>'JAVA',
                'desc'=>'Java is a programming language and computing platform first released by Sun Microsystems in 1995. It has evolved from humble beginnings to power a large share of today’s digital world, by providing the reliable platform upon which many services and applications are built. New, innovative products and digital services designed for the future continue to rely on Java, as well',
                'program_nature'=>'طبيعة البرنامج الثالث',
                'objectives'=>'Lreaning the Basics of JAVA Framework',
                'field' => 'Field',
                'references'=> 'references Section',
                'start_date' => '2023/01/01',
                'end_date' => '2023/06/01',
                'time' => 'صباحية',
                'hours' => 45,
                'lectures_number' => 25,
                'supervisor' => 'supervisor',
                'destination'=> 'University Students',
                'beneficiary'=> 'الجهة 3',
                'capacity' => 50,
                'requirments'=> 'JAVA Basics',
                'price' => 180,
                'location' => 'غزة',
                'user_id' => 1,
                'status' => 'تم',
            ]   
        );
        $course3->addMedia(public_path('admin\media\svg\brand-logos\figma-1.svg'))->preservingOriginal()->toMediaCollection('courses');

    }
}
