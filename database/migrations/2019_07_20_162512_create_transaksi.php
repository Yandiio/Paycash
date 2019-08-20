<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('tgl_transaksi');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->integer('pembayaran_id')->unsigned();
            $table->integer('total_transaksi');
            $table->text('ket_transaksi');
            $table->timestamps();
        });

        Schema::table('transaksi', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
