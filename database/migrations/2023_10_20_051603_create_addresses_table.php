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
        Schema::create('addresses', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('status');
            $table->string('type');
            $table->string('city');
            $table->string('country');
            $table->string('street');
            $table->string('state');
            $table->string('zip');
            $table->text('remarks')->nullable();
            $table->UUID('addressable_id');
            $table->string('addressable_type');
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
        Schema::dropIfExists('addresses');
    }
};
