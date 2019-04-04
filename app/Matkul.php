<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $primaryKey = "kode_kelas";
    protected $table = 'matkuls';

    protected $fillable = ['nama','kode','deskripsi','nip_dosen'];
    public function dosen(){
        return $this->hasOne('App\Dosen','nip','nip_dosen');
    }

}
