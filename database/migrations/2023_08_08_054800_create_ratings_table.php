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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->nullable()->constrained();
            $table->foreignId('trainer_id')->nullable()->constrained();
            $table->foreignId('rate_id')->nullable()->constrained();
            $table->foreignId('lecture_id')->nullable()->constrained();
            $table->double('percentage')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_ratings');
    }
};
