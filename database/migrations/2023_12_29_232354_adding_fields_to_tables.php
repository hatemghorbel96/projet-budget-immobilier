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
            $table->integer('views')->nullable()->defaultValue(0);
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->integer('telephone')->nullable();
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('views');
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('telephone');
            $table->dropColumn('email');
        });
    }
};
