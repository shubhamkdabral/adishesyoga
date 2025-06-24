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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_heading');
            $table->string('banner_short_description');
            $table->string('title');
            $table->string('short_description');
            $table->text('description');
            $table->string('retreat_name');
            $table->string('days');
            $table->float('price');
            $table->integer('total_person');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
