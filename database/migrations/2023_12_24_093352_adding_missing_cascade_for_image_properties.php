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
        Schema::table('image_properties', function (Blueprint $table) {
           
            $table->dropForeign(['propertie_id']);

         
            $table->foreign('propertie_id')
                ->references('id')
                ->on('properties')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image_properties', function (Blueprint $table) {
           
            $table->dropForeign(['propertie_id']);
            $table->foreign('propertie_id')
                ->references('id')
                ->on('properties')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }
};
