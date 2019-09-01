<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Transaksi extends Model
{
    // protected $fillable = [
    //     ''    
    // ];

   public function siswa() {
       return $this->belongsTo('App/Siswa');
   }

   public function user() {
        return $this->belongsTo('App/User');
    }

    public function dsp() {
        return $this->hasMany('App/Dsp');
    }

    public function spp() {
        return $this->hasMany('App/Spp');
    }

    public function setSuccess(){
        $this->attributes['status'] = 'success';
        self::save;
    }

    public function setFailed(){
        $this->attributes['status'] = 'failed';
        self::save;
    }

    public function setPending(){
        $this->attributes['status'] = 'pending';
        self::save;
    }

    public function setExpired(){
        $this->attributes['status'] = 'expired';
        self::save;
    }


}
