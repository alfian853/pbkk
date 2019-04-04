<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = "kode";
    protected $table = 'kelas';

    protected $fillable = ['kode','nip_dosen','kode_matkul'];
    public function dosen(){
        return $this->hasOne('App\Dosen','nip','nip_dosen');
    }

    public function matkul(){
        return $this->hasOne('App\Matkul','kode','kode_kelas');
    }

}
