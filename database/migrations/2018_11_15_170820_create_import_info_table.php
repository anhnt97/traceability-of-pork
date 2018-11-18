<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            $table->integer('average_weight');
            $table->date('last_treatment');
            $table->string('drug');
            $table->date('stop_drug_date'); //ngày ngưng thuốc
            $table->string('quarantine_place'); //điểm kiểm dịch
            $table->string('receiver');
            $table->date('import_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_info');
    }
}
