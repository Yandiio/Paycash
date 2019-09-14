<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    protected $table = "siswa";

    public function kelas() {
        return $this->hasOne('App/Kelas');
    }

    public function jurusan() {
        return $this->hasOne('App/Jurusan');
    }

    public function transaksi() {
        return $this->hasMany('App/Transaksi');
    }
    
    public function tunggakan() {
        return $this->hasMany('App/Tunggakan');
    }
}
