<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrPerizinanApotiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_perizinan_apotiks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admins');
            $table->integer('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('m_pemohons');
            $table->integer('id_pemilik')->unsigned();
            $table->foreign('id_pemilik')->references('id')->on('m_pemiliks');
            $table->integer('id_alat')->unsigned();
            $table->foreign('id_alat')->references('id')->on('id_alat');
            $table->integer('id_apoteker')->unsigned();
            $table->foreign('id_apoteker')->references('id')->on('m_apotekers');
            $table->integer('id_apotek')->unsigned();
            $table->foreign('id_apotek')->references('id')->on('m_apoteks');
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
        Schema::dropIfExists('tr_perizinan_apotiks');
    }
}
