<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    //
    protected $primaryKey = "id";
    protected $table = 'matkul';

    protected $fillable = ['nama','kode','deskripsi'];

}
