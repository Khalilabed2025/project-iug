<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(TraineeSeeder::class);
        $this->call(RateSeeder::class);
        $this->call(LectureSeeder::class);
        $this->call(RatingSeeder::class);
    }
}
