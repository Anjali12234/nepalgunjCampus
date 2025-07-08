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
        Schema::create('enrollment_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('college_name');
            $table->string('faculty');
            $table->string('phone_no');
            $table->string('email');
            $table->string('photo_of_id_card')->nullable();
            $table->string('photo_of_post_shared')->nullable();
            $table->text('message');
            $table->boolean('status')->default(true)->nullable();   
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_forms');
    }
};
