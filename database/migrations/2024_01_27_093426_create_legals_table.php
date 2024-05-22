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
        Schema::create('legals', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('plaintiff')->nullable(); // Store plaintiffs as JSON array
            $table->string('defendant')->nullable(); // Store defendants as JSON array
            //bankruptcy fields
            $table->string('chapter')->nullable();
            $table->string('case_number')->nullable();
            $table->string('location')->nullable();
            $table->string('closed_date')->nullable();
            $table->string('converted_date')->nullable();
            $table->string('date_341')->nullable();
            $table->decimal('re_affirmation_amount', 10, 2)->nullable();
            $table->string('re_affirmation_date')->nullable();
            $table->decimal('arrangement_amount', 10, 2)->nullable();
            // probate fields
            $table->string('probate_case_number')->nullable();
            $table->string('date_of_death')->nullable();

            $table->string('court_name')->nullable();
            $table->string('county')->nullable();
            $table->string('state')->nullable();
            $table->string('date_filed')->nullable();
            $table->string('date_expires')->nullable();
            $table->text('remarks')->nullable();

            $table->foreignUuid('claim_id')->nullable()->references('id')->on('claims')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('legals');
    }
};
