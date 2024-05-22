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

        Schema::create('claims', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('debtor_person');
            $table->string('portfolio')->nullable();

            $table->string('debtor_organization');
            $table->string('type_of_debt')->nullable();

            $table->decimal('placement_amount', 10, 2);
            $table->string('collector')->nullable();

            $table->date('interest_start_date');
            $table->decimal('pre_judgment_interest', 5, 2);
            $table->decimal('post_judgment_interest', 5, 2);
            $table->string('client')->nullable();
            $table->string('method_contingency')->nullable();

            $table->string('creditor')->nullable();
            $table->string('claim_number');
            $table->string('status');
            $table->date('date_assigned');
            $table->text('remarks');

            $table->foreignUuid('debtor_id')->references('id')->on('debtors')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('claims');
    }
};
