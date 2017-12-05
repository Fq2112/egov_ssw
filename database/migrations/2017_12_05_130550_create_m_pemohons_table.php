<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pemohons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk',array('Pria','Wanita'));
            $table->string('agama');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_sipa');
            $table->string('phone');
            $table->string('job');
            $table->string('jabatan');
            $table->date('tgl_sipa');
            $table->string('npwp')->unique();
            $table->string('tempat_sk');
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
        Schema::dropIfExists('m_pemohons');
    }
}
