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
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('location');
            $table->string('type');
            $table->string('purchase_type');
            $table->decimal('surface')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->decimal('budget')->nullable();
            $table->text('amenities')->nullable();
            $table->string('heating_type')->nullable();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->json('tags')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
