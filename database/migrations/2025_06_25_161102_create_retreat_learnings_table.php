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
        Schema::create('retreat_learnings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retreat_id')->constrained('retreats')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->text('description');
            $table->string('key_point_1');
            $table->string('key_point_2');
            $table->string('key_point_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retreat_learnings');
    }
};
