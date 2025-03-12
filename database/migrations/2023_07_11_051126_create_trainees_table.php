<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trainees', function (Blueprint $table) {

            $table->id();
            $table->string('trainee_id')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ar');
            $table->string('university_id')->nullable();
            $table->string('job')->nullable();
            $table->string('POB')->nullable();
            $table->date('DOB')->nullable();
            $table->string('identity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('job_status')->nullable();
            $table->string('current_job')->nullable();
            $table->string('blood')->nullable();
            $table->string('job_title')->nullable();

            
            /* Trainee's Health */
            $table->string('health_status')->nullable();
            $table->string('disease_type')->nullable();
            $table->string('injury_type')->nullable();

            /* Trainee's Address */
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('closest_place')->nullable();
            $table->string('closest_university')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('email')->nullable();

            /* Secondary School informations */
            $table->string('seat_number')->nullable();
            $table->string('institution')->nullable();
            $table->string('year')->nullable();
            $table->string('GPA')->nullable();
            $table->string('certificate_type')->nullable();
            $table->string('grades')->nullable();
            
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainees');
    }
};
