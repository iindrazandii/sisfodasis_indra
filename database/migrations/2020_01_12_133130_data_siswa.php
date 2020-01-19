<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nisn',10);
            $table->string('nama',30);
            $table->date('tgllhr');
            $table->string('temlhr',30);
            $table->integer('kelas');
            $table->longText('alamat');
            $table->string('foto',255);
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
        Schema::dropIfExists('dasis');
    }
}
