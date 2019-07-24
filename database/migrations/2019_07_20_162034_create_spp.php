<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksi_id')->unsigned();
            $table->foreign('transaksi_id')
            -> references('id')->on('transaksi')
            ->onDelete('cascade');
            $table->string('thn_ajaran', 10);
            $table->integer('besar_iuran');
            $table->text('ket_iuran');
            $table->timestamps();
        });

        // Schema::table('spp',function(Blueprint $table){
         
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spp');
    }
}
