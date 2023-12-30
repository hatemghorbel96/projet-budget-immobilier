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
            $table->integer('user_id')->nullable();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->string('whatsapp')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('user_id')->nullable();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('telephone');
            $table->dropColumn('address');
            $table->dropColumn('whatsapp');
            
        });
    }
};
