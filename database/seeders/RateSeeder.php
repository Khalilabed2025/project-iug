<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rates = [
         'الإلمام بمواضيع المحاضرة', 
         'توصيل المعلومة وإكساب المهارات', 
         'تنظيم المحاضرة (الوضوح والكفاية)', 
         'التنويع في الأنشطة والوسائل', 
         'القدرة على تحفيز المشاركين', 
         'المحتوى يتوافق مع أهداف البرنامج', 
         'تراعي التطور في المفاهيم والنظريات الحديثة', 
         'تتكامل في محتوياتها من حيث المهارات والمعارف', 
         'أكسبتك المحاضرات المهارة والخبرة المرجوة', 
         'حققت المحاضرة توقعاتك العلمية المرجوة', 
         'مناسبة مكان انعقاد الدورة', 
         'توفر الأجهزة والمعدات اللازمة', 
         'توفر الضيافة والأمور اللوجستية', 
         'مستوى اهتمام ومتابعة منسق الدورة',];
        foreach($rates as $key => $rate){
            if($key < 5) $type = 'مدرب';
            elseif($key >= 5 && $key < 10) $type = 'محتوى';
            else $type = 'مكان';
            Rate::create(
                [
                    'title' => $rate,
                    'type' => $type,
                ]
            );  
        }
        
       
    }
}
