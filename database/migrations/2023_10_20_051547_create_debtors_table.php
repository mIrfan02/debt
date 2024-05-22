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
        Schema::create('debtors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('dob');
            $table->string('ssn');
            $table->string('position');
            $table->string('company');
            $table->string('driver_license1');
            $table->string('organization');
            $table->string('driver_license2')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->string('alias1');
            $table->string('cell');
            $table->string('other');
            $table->string('alias2')->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('debtors');
    }
};
