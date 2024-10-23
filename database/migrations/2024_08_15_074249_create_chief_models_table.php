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
        Schema::create('chief_models', function (Blueprint $table) {
            $table->id();
            $table->string('chief_name');
            $table->string('nationality')->nullable();
            $table->string('speciality');
            $table->string('experience')->nullable();
            $table->string('chief_picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chief_models');
    }
};
