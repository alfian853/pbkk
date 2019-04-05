<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MhsKelas extends Model
{
    protected $table = 'mhs_kelas';

    protected $fillable = ['kode_kls','nrp_mhs', 'nilai'];

    public function mhs(){
        return $this->hasMany('App\Mhs', 'nrp', 'nrp_mhs');
    }
    public function kelas(){
      return $this->hasMany('App\Kelas', 'kode_kelas', 'kode_kls');
    }
}
