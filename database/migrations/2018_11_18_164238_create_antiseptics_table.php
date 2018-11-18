<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntisepticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antiseptic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->string('dose'); //liều dùng
            $table->string('insecticide'); //thuốc sat trùng
            $table->string('executor'); //người thực hiện
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
        Schema::dropIfExists('antiseptics');
    }
}
