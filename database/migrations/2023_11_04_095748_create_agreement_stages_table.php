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
        Schema::create('agreement_stages', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->foreignUuid('agreement_id')->references('id')->on('agreements')->onDelete('cascade')->onUpdate('cascade');
            $table->string('stage');
            $table->string('pay_freq');
            $table->string('no_of_pay');
            $table->decimal('pay_amount', 10, 2);
            $table->decimal('stage_total', 10, 2);
            $table->date('first_pay_date');
            $table->date('last_pay_date');
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
        Schema::dropIfExists('agreement_stages');
    }
};
