<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mhses');
        Schema::create('mhses', function (Blueprint $table) {
            $table->string('nrp',16)->primary();
            $table->string('namamhs',64);
            $table->string('nipdosenwali',16);
            $table->foreign('nipdosenwali')->references('nip')->on('dosens');
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
        Schema::dropIfExists('mhs');
    }
}
