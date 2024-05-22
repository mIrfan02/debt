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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('category')->nullable();

            $table->string('debtor_claim_number')->nullable();
            $table->string('client_name')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('paid_by')->nullable();
            $table->string('paid_to')->nullable();
            $table->string('final_payment')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('category');

            $table->dropColumn('debtor_claim_number');
            $table->dropColumn('client_name');
            $table->dropColumn('payment_type');
            $table->dropColumn('paid_by');
            $table->dropColumn('paid_to');
            $table->dropColumn('final_payment');

        });
    }
};
