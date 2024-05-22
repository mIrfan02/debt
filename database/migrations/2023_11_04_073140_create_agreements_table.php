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
        Schema::create('agreements', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->foreignUuid('debtor_id')->references('id')->on('debtors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->string('type');
            $table->string('reason');
            $table->string('authority');
            $table->decimal('amount', 10, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('interest_amount', 10, 2);
            $table->decimal('total_to_pay', 10, 2);
            $table->date('agreement_date');
            $table->date('interest_from');
            $table->date('last_pay')->nullable();
            $table->date('next_pay')->nullable();
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('agreements');
    }
};
