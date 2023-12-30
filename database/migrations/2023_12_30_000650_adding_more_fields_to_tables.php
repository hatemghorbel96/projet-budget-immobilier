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
            $table->integer('heating')->nullable()->defaultValue(0);
            $table->integer('Airconditioning')->nullable();
            $table->integer('pool')->nullable();
            $table->integer('cameras')->nullable();
            $table->integer('builded')->nullable();
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->integer('readed')->nullable()->defaultValue(0);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('heating');
            $table->dropColumn('Airconditioning');
            $table->dropColumn('pool');
            $table->dropColumn('cameras');
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('readed');
          
        });
    }
};
