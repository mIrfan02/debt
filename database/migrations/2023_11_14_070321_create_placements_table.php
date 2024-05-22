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
        Schema::create('placements', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('placement_date');
            $table->string('contigency_method');
            $table->string('method_rate')->nullable();
            $table->string('sliding_scale')->nullable();

            $table->string('interest_start_date');
            $table->string('allocation_method');

            $table->string('interest_rate');
            $table->string('debt_type');
            // $table->foreignUuid('debtor_id')->references('id')->on('debtors')->onDelete('cascade')->onUpdate('cascade');




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
        Schema::dropIfExists('placements');
    }
};
