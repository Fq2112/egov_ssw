<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasApoteksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_apoteks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->integer('status');
            $table->integer('apotek_proses_id')->unsigned();
            $table->foreign('apotek_proses_id')->references('id')->on('tr_perizinan_apotiks');
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
        Schema::dropIfExists('berkas_apoteks');
    }
}
