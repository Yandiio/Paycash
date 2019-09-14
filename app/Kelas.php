<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = "kelas";

    public function siswa() {
        return $this->belongsTo('App/Siswa');
    }

    protected $fillable = [
        'nama_kelas', 'tingkat_kelas', 'wali_kelas',
    ];
}
