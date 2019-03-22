<?php

use Illuminate\Database\Seeder;

class mhsDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            DB::table('mhs')->insert([
                'nrp' => 'mhs00'.$i,
                'nama' => 'nama ke-'.$i,
                'alamat' => 'ITS',]);
        }
    }
}
