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
        Schema::create('stays_amenities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stay_id')->constrained('stays')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stays_amenities');
    }
};
