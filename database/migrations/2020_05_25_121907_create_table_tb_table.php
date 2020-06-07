<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_konten', function (Blueprint $table) {
            $table->id();
            $table->string('judul',30);
            $table->text('konten');
            $table->dateTime('diunggah_pada');
            $table->dateTime('diedit_pada');
            $table->string('kategori',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_konten');
    }
}
