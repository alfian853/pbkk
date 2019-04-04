<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('matkuls');
        Schema::create('matkuls', function (Blueprint $table) {
            $table->string('kode_matkul',16)->primary();
            $table->string('nama',64);
            $table->string('deskripsi',128);
            $table->string('nip_dosen',16);
            $table->foreign('nip_dosen')->references('nip')->on('dosens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
