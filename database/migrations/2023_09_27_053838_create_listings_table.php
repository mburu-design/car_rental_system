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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fleet_id')->references('id')->on('fleets')->onDelete('cascade');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->dateTime('dropoff_date');
            $table->time('dropoff_time');
            $table->string('pickup_location');
            $table->float('total_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
