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
        Schema::create('car_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fleet_id')->references('id')->on('fleets')->onDelete('cascade');
            $table->smallInteger('score');
            $table->text('review_comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_ratings');
    }
};
