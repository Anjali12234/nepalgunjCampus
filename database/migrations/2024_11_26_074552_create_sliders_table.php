<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('slug')->nullable();
            $table->string('position');
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
