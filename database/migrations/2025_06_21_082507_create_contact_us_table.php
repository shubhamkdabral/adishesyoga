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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_heading');
            $table->string('banner_short_description');
            $table->string('title');
            $table->string('short_description');
            $table->string('phone');
            $table->string('email');
            $table->text('google_map');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('linkdedin');
            $table->string('x');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
