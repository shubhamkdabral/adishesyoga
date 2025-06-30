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
        Schema::create('retreat_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retreat_id')->constrained('retreats')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('time');
            $table->string('Activity');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retreat_schedules');
    }
};
