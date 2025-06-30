<?php

use App\Enums\RetreatButtonTypeEnum;
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
        Schema::create('retreats', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_heading');
            $table->string('banner_short_description');
            $table->string('title');
            $table->string('slug');
            $table->string('short_description');
            $table->text('description');
            $table->string('retreat_name');
            $table->integer('program_in_days');
            $table->integer('price');
            $table->integer('total_person');
            $table->string('button_text');
            $table->string('address');
            $table->enum('button_type', RetreatButtonTypeEnum::asArray());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retreats');
    }
};
