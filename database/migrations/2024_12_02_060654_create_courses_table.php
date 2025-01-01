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
            $table->foreignId('semester_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('course_title');
            $table->string('course_code');
            $table->string('course_pdf');
            $table->string('credit_hr')->nullable();
            $table->string('lecture_hr')->nullable();
            $table->string('tution_hr')->nullable();
            $table->string('lab_hr')->nullable();
            $table->string('slug')->nullable();
            $table->string('position');
            $table->softDeletes();
            $table->timestamps();
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
