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
        Schema::create('our_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->text('description');
            $table->string('experience');
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_teams');
    }
};
