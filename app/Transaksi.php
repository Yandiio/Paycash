<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   public function siswa() {
       return $this->belongsTo('App/Siswa');
   }

   public function user() {
        return $this->belongsTo('App/User');
    }

    public function pembayaran() {
        return $this->hasOne('App/Pembayaran');
    }

    public function dsp() {
        return $this->hasMany('App/Dsp');
    }

    public function spp() {
        return $this->hasMany('App/Spp');
    }


}
