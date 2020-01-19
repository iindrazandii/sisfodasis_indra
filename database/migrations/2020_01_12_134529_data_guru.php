<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dagur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip',10);
            $table->string('namaguru',30);
            $table->date('tgllhr');
            $table->string('temlhr',30);
            $table->string('golongan',30);
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
        Schema::dropIfExists('dagur');
    }
}
