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
        Schema::create('our_food_and_accs', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_heading');
            $table->string('banner_short_description');
            $table->string('title');
            $table->string('short_description');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_food_and_accs');
    }
};
