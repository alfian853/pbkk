<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $primaryKey = "nip";
    protected $table = 'dosens';

    protected $fillable = ['namadosen','nip'];

}
