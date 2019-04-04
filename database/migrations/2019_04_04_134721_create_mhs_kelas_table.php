<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhsKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mhs_kelas');
        Schema::create('mhs_kelas', function (Blueprint $table) {
            $table->string('kode_kelas',64);
            $table->string('nrp_mhs',16);
            $table->string('nilai',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mhs_kelas');
    }
}
