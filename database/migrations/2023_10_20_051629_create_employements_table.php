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
        Schema::create('employements', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('employer');
            $table->string('employee_name');
            $table->string('position');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->decimal('pay_amount', 10, 2);
            $table->string('pay_period');
            $table->date('date_last_paid');
            $table->date('date_last_commenced');
            $table->string('country');
            $table->string('phone');
            $table->string('fax');
            $table->string('cell');
            $table->string('other');
            $table->date('date_ceased');
            $table->string('length_of_service');
            $table->text('remarks')->nullable();
            $table->foreignUuid('debtor_id')->constrained('debtors');
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
        Schema::dropIfExists('employements');
    }
};
