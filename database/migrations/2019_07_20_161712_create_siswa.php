<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nama', 50);
            $table->integer('kelas_id')->unsigned();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->integer('jurusan_id')->unsigned();
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
            $table->string('thn_ajaran', 10);
            $table->string('tlp', 13);
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
        Schema::dropIfExists('siswa');
    }
}
