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
        Schema::create('ticklers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('debtor_id')->references('id')->on('debtors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignUuid('type_id')->references('id')->on('tickler_types')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('response')->nullable();
            $table->dateTime('sent_at')->nullable();
            $table->dateTime('receive_at')->nullable();
            $table->string('status', 255)->default('0');
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
        Schema::dropIfExists('ticklers');
    }
};
