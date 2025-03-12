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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('desc')->nullable();
            $table->string('program_nature')->nullable();
            $table->string('objectives')->nullable();
            $table->string('field')->nullable();
            $table->string('references')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('time')->nullable();
            $table->integer('hours')->nullable();
            $table->integer('lectures_number')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('destination')->nullable();
            $table->string('beneficiary')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('requirments')->nullable();
            $table->string('price')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('Pending');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
