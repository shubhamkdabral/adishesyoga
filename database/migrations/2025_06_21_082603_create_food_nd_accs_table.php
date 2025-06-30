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
        Schema::create('food_nd_accs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retreat_id')->constrained('retreats')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->text('acc_description');
            $table->string('room_type');
            $table->string('amenities');
            $table->string('connectivity');
            $table->text('food_description');
            $table->string('org_local');
            $table->string('meal_schedule');
            $table->string('dietary_needs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_nd_accs');
    }
};
