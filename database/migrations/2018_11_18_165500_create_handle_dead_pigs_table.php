<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandleDeadPigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handle_dead_pigs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->integer('amount');
            $table->string('symptom'); //triệu chứng
            $table->string('vestige'); //bệnh tích
            $table->string('executor');
            $table->string('solution');
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
        Schema::dropIfExists('handle_dead_pigs');
    }
}
