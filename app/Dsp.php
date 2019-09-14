<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dsp extends Model
{
    public function transaksi() {
        return $this->belongsTo('App/Transaksi');
    }
}
