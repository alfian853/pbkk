<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kelases');
        Schema::create('kelases', function (Blueprint $table) {
            $table->string('kode_kelas',64)->primary();
            $table->string('nama',16);
            $table->string('nip_dosen',16);
            $table->string('kode_matkul',16);
            $table->foreign('nip_dosen')->references('nip')->on('dosens');
            $table->foreign('kode_matkul')->references('kode_matkul')->on('matkuls');
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
        Schema::dropIfExists('kelas');
    }
}
