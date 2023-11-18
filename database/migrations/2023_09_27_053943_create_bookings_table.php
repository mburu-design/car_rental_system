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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ride_requests_id')->references('id')->on('ride_requests')->onDelete('cascade');
            $table->foreignId('car_owners_id')->references('id')->on('car_owners')->onDelete('cascade');

            $table->foreignId('payments_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreignId('riders_id')->references('id')->on('riders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
