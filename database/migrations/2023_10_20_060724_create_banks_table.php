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
        Schema::create('banks', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('bank_code');
            $table->string('address');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('department');
            $table->string('country');
            $table->string('contact');
            $table->string('phone');
            $table->string('position');
            $table->string('fax');
            $table->string('cell');
            $table->string('email');
            $table->string('other');
            $table->text('remarks')->nullable();
            $table->uuid('bankable_id');
            $table->string('bankable_type');
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
        Schema::dropIfExists('banks');
    }
};
