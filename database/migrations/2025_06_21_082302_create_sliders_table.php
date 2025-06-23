<?php

use App\Enums\SliderButtonType;
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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slider_no');
            $table->string('heading');
            $table->text('description');
            $table->string('button_1');
            $table->enum('button1_type', SliderButtonType::asArray());
            $table->string('button1_url');
            $table->string('button_2');
            $table->enum('button2_type', SliderButtonType::asArray());
            $table->string('button2_url');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
