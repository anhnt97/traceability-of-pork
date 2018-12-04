<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColSellAtToPigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pigs', function (Blueprint $table) {
            $table->date('sell_at')->nullable()->after('qr_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pigs', function (Blueprint $table) {
            $table->dropCollumn('sell_at');
        });
    }
}
