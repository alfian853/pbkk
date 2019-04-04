<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class matkulDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 200; $i++) {
            DB::table('matkuls')->insert([
                'kode_matkul' => 'kode-matkul-'.$i,
                'nama' => 'nama-matkul-'.$i,
                'deskripsi' => '',
                'nip_dosen' => 'nip-'.mt_rand(1,100)]);
        }
    }
}
