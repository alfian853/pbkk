<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    //
    protected $primaryKey = "nrp";
    protected $table = 'mhs';

    protected $fillable = ['namamhs','nrp','nipdosenwali'];

    public function dosen_wali(){
        return $this->hasOne('App\Dosen','nip','nipdosenwali');
    }
}
