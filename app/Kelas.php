<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function siswa() {
        return $this->belongsTo('App/Siswa');
    }
}
