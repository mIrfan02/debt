<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('person')->nullable();
            $table->string('position')->nullable();
            $table->string('client_number')->nullable();
            $table->string('organization')->nullable();
            $table->string('collector')->nullable();
            $table->string('display_as')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('cell')->nullable();
            $table->string('fax')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->text('remarks')->nullable();

            // Creditor Details
            $table->string('creditor')->nullable();
            $table->string('creditor_number')->nullable();
            $table->string('creditor_organization')->nullable();
            $table->string('creditor_collector')->nullable();
            $table->string('creditor_display_as')->nullable();
            $table->string('creditor_email')->nullable();
            $table->string('creditor_phone')->nullable();
            $table->string('creditor_address')->nullable();
            $table->string('creditor_cell')->nullable();
            $table->string('creditor_fax')->nullable();
            $table->string('creditor_city')->nullable();
            $table->string('creditor_state')->nullable();
            $table->string('creditor_zip')->nullable();
            $table->string('creditor_country')->nullable();
            $table->text('creditor_remarks')->nullable();

            // Original Details
            $table->decimal('creditor_amount', 10, 2)->nullable();
            $table->date('creditor_open_date')->nullable();
            $table->string('creditor_line_2')->nullable();
            $table->decimal('interest_amount', 10, 2)->nullable();
            $table->date('interest_date')->nullable();
            $table->string('account_no')->nullable();
            $table->decimal('suit_fee', 10, 2)->nullable();
            $table->date('date_stay_lifted')->nullable();

            // Credit Bureau Details
            $table->date('original_open_date')->nullable();
            $table->date('delinquency_date')->nullable();
            $table->string('terms_duration')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('payment_history')->nullable();
            $table->string('experian_code')->nullable();
            $table->decimal('original_amount', 10, 2)->nullable();
            $table->decimal('amount_past_due', 10, 2)->nullable();
            $table->string('transUnion_code')->nullable();
            $table->decimal('charge_off_amount', 10, 2)->nullable();
            $table->string('billing_day_of_month')->nullable();
            $table->string('equifax_code')->nullable();
            $table->decimal('monthly_payment', 10, 2)->nullable();
            $table->string('residence_code')->nullable();
            $table->string('invoice_code')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
