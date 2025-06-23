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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_heading');
            $table->string('banner_short_description');
            $table->string('title');
            $table->string('short_description');
            $table->string('key_point_1');
            $table->string('key_point_2');
            $table->string('key_point_3');
            $table->string('key_point_4');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
