<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMApotekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_apotekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk',array('Pria','Wanita'));
            $table->string('agama');
            $table->string('alamat');
            $table->string('no_telf');
            $table->string('pendidikan');
            $table->date('thn_lulus');
            $table->string('no_sipa');
            $table->date('tgl_sipa');
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
        Schema::dropIfExists('m_apotekers');
    }
}
