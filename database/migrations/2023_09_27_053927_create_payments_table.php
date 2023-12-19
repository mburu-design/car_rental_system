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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ride_requests_id')->references('id')->on('ride_requests')->onDelete('cascade');
            $table->foreignId('riders_id')->references('id')->on('riders')->onDelete('cascade');
            $table->foreignId('lessor_id')->references('id')->on('car_owners')->onDelete('cascade');
            $table->enum('payment_method', ['mpesa', 'card']);
            $table->float('amount');
            $table->string('transaction_code')->nullable();
            $table->string('payment_phone')->nullable();
            $table->string('reference')->nullable();
            $table->string('description')->nullable();
            $table->string('MerchantRequestID')->nullable();
            $table->string('CheckoutRequestID')->nullable();
            $table->enum('status', ['paid', 'requested', 'declined'])->default('requested');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
