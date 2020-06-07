<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTbStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tb_status', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('positif');
            $table->bigInteger('death');
            $table->bigInteger('cured');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tb_status');
    }
}
