<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    public function run()
    {
        $ratings = [
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 1,
                'lecture_id' => 1,
                'percentage' => 80.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'trainer_id' => 2,
                'rate_id' => 2,
                'lecture_id' => 2,
                'percentage' => 90.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 3,
                'trainer_id' => 3,
                'rate_id' => 3,
                'lecture_id' => 3,
                'percentage' => 75.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 2,
                'rate_id' => 1,
                'lecture_id' => 4,
                'percentage' => 88.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 3,
                'rate_id' => 2,
                'lecture_id' => 5,
                'percentage' => 95.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 3,
                'lecture_id' => 1,
                'percentage' => 70.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 2,
                'rate_id' => 1,
                'lecture_id' => 2,
                'percentage' => 82.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 2,
                'lecture_id' => 3,
                'percentage' => 88.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 3,
                'rate_id' => 3,
                'lecture_id' => 4,
                'percentage' => 78.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 1,
                'lecture_id' => 5,
                'percentage' => 85.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 2,
                'rate_id' => 2,
                'lecture_id' => 1,
                'percentage' => 91.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 3,
                'lecture_id' => 1,
                'percentage' => 72.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 3,
                'rate_id' => 1,
                'lecture_id' => 2,
                'percentage' => 88.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 2,
                'rate_id' => 2,
                'lecture_id' => 3,
                'percentage' => 76.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 1,
                'rate_id' => 3,
                'lecture_id' => 4,
                'percentage' => 83.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'trainer_id' => 2,
                'rate_id' => 1,
                'lecture_id' => 5,
                'percentage' => 89.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries if needed
        ];

        DB::table('ratings')->insert($ratings);
    }
}
