<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->integer('food_id')->references('id')->on('food')->onDelete('cascade')->nullable();
            $table->integer('mix_id')->references('id')->on('food_mix')->onDelete('cascade')->nullable();
            $table->integer('mass');
            $table->string('feeder');
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
        Schema::dropIfExists('feeds');
    }
}
