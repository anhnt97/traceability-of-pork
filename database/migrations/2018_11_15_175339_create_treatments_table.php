<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pig_id')->references('id')->on('pigs')->onDelete('cascade');
            $table->integer('drug_id')->references('id')->on('drugs')->onDelete('cascade');
            $table->string('dose');  //liều lượng
            $table->string('doctor');
            $table->string('reason');
            $table->string('result');
            $table->date('start_at');
            $table->date('finish_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
