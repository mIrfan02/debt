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
        Schema::create('placement_components', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('name');
            $table->decimal('amount', 10, 2);
            $table->decimal('rate', 10, 2)->nullable();
            $table->string('date')->nullable();
            $table->text('comments')->nullable();
            $table->decimal('placement_total');


            // Foreign key to placements table
            $table->foreignUuid('placement_id')->references('id')->on('placements')->onDelete('cascade');
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
        Schema::dropIfExists('placement_components');
    }
};
