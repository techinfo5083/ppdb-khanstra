<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama', 50);
            $table->string('jk',2);
            $table->string('tempat_lahir', 50);
            $table->string('alamat', 100);
            $table->date('tgl_lahir');
            $table->string('nama_sekolah', 50);
            $table->integer('id_jurusan');
            $table->string('no_telp', 13);
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
        Schema::dropIfExists('calon_siswa');
    }
}
