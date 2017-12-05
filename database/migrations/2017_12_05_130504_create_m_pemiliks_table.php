<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPemiliksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pemiliks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk',array('Pria','Wanita'));
            $table->string('agama');
            $table->string('alamat');
            $table->string('phone');
            $table->string('email');
            $table->string('npwp')->unique();
            $table->string('pekerjaan');
            $table->string('jabatan');
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
        Schema::dropIfExists('m_pemiliks');
    }
}
