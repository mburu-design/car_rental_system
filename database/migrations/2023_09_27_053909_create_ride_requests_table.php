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
        Schema::create('ride_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->foreignId('riders_id')->references('id')->on('riders')->onDelete('cascade');
            $table->foreignId('fleet_id')->references('id')->on('fleets')->onDelete('cascade');
            $table->foreignId('car_owners_id')->references('id')->on('car_owners')->onDelete('cascade');
            $table->enum('status', ['approved', 'declined', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_requests');
    }
};
