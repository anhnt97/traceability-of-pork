<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodMixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_mix', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->integer('drug_id')->references('id')->on('drugs')->onDelete('cascade');
            $table->string('mix_rate');
            $table->string('mixer');
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
        Schema::dropIfExists('food_mix');
    }
}
