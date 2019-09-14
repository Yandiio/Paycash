<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunggakan extends Model
{

    protected $table = 'siswa';

    public function siswa() {
        return $this->belongsTo('App/Siswa');
    }

    public function user() {
        return $this->belongsTo('App/User');
    }
}
