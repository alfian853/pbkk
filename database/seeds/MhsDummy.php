<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class mhsDummy extends Seeder
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
            DB::table('mhses')->insert([
                'nrp' => 'mhs00'.$i,
                'namamhs' => $faker->name,
                'nipdosenwali' => 'nip-'.mt_rand(1,100)]);
        }
    }
}
