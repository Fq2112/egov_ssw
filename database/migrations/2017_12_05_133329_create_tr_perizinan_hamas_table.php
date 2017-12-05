<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrPerizinanHamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_perizinan_hamas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admins');
            $table->integer('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('m_pemohons');
            $table->integer('id_perusahaan')->unsigned();
            $table->foreign('id_perusahaan')->references('id')->on('m_perusahaans');
            $table->string('name');
            $table->string('file_berkas');
            $table->date('tgl_perizinan');
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
        Schema::dropIfExists('tr_perizinan_hamas');
    }
}
