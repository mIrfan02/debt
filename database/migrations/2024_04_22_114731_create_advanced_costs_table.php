<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancedCostsTable extends Migration
{
    public function up()
    {
        Schema::create('advanced_costs', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->foreignUuid('claim_id')->nullable()->references('id')->on('claims')->onDelete('cascade')->onUpdate('cascade');

            $table->string('category');
            $table->string('debtor_claim_number');
            $table->string('client_name');
            $table->string('cost_type');
            $table->date('cost_date');
            $table->date('effective_date');
            $table->decimal('cost_amount', 10, 2);
            $table->string('cost_method');
            $table->string('check_no')->nullable();
            $table->string('advanced_by');
            $table->string('charged_to');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advanced_costs');
    }
}
