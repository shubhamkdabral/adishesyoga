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
        Schema::create('retreat_carries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('retreat_id')->constrained('retreats')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('item_1');
            $table->string('item_2');
            $table->string('item_3');
            $table->string('item_4');
            $table->string('item_5');
            $table->string('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retreat_carries');
    }
};
