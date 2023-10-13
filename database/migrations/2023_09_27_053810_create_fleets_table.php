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
        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_owners_id')->references('id')->on('car_owners')->onDelete('cascade');
            $table->string('car_registration_number');
            $table->string('insurance_provider');
            $table->string('insurace_policy_number');
            $table->string('category');
            $table->string('make');
            $table->string('model');
            $table->enum('fuel_type', ['diesel', 'petrol', 'electric']);
            $table->integer('year');
            $table->enum('transmission_type', ['automatic', 'manual']);
            $table->string('exterior_front_image');
            $table->string('exterior_side_image');
            $table->string('exterior_rear_image');
            $table->string('interior_front_image');
            $table->string('interior_back_image');
            $table->integer('number_of_doors');
            $table->integer('number_of_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleets');
    }
};
