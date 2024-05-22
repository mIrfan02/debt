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
        Schema::table('claims', function (Blueprint $table) {
            $table->string('remaining_principle')->nullable();
            $table->string('remaining_cost')->nullable();
            $table->string('accumulated_interest')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn('remaining_principle');
            $table->dropColumn('remaining_cost');
            $table->dropColumn('accumulated_interest');
        });
    }
};
