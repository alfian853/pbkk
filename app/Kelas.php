<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = "kode_kelas";
    protected $table = 'kelases';
    public $incrementing = false;

    protected $fillable = ['nama','kode_kelas','nip_dosen','kode_matkul'];

    public function dosen(){
        return $this->hasOne('App\Dosen','nip','nip_dosen');
    }

    public function matkul(){
        return $this->hasOne('App\Matkul','kode_matkul','kode_matkul');
    }

}
