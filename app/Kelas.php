<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = "kode";
    protected $table = 'kelases';

    protected $fillable = ['kode','nama', 'nip_dosen','kode_matkul'];

    public function dosen(){
        return $this->hasOne('App\Dosen','nip','nip_dosen');
    }

    public function matkul(){
        return $this->hasOne('App\Matkul','kode','kode_kelas');
    }

}
