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
        Schema::create('image_properties', function (Blueprint $table) {
            $table->id();
            $table->text('path');
            $table->unsignedInteger('propertie_id')->nullable();

            $table->foreign('propertie_id')
                    ->references('id')
                    ->on('properties')
                    ->onUpdate('cascade')
                    ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_properties');
    }
};