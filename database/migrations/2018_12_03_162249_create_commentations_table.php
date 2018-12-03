<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id');
            $table->string('import_cmt')->nullable();
            $table->string('feed_cmt')->nullable();
            $table->string('treatment_cmt')->nullable();
            $table->string('vaccination_cmt')->nullable();
            $table->string('handle_dead_pig_cmt')->nullable();
            $table->string('antiseptic_cmt')->nullable();
            $table->string('sell_cmt')->nullable();
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
        Schema::dropIfExists('commentations');
    }
}
