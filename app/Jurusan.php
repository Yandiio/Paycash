<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public $table="jurusan";
    
    public function siswa() {
        return $this->belongsTo('App/Siswa');
    }

    protected $fillable = [
        'nama_jurusan',
    ];
}
