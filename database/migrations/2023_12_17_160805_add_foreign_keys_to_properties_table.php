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
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('location');

            $table->unsignedInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations');

            $table->dropColumn('type');

           
            $table->unsignedInteger('bientype_id')->nullable();
            $table->foreign('bientype_id')->references('id')->on('bientypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['location_id']);
            $table->dropColumn('location_id');

            $table->dropForeign(['bientype_id']);
            $table->dropColumn('bientype_id');
            $table->string('location');
            $table->string('type');
        });
    }
};
