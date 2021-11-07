<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            \DB::table('pekerjaans')->insert([
                'alumniId' => $faker->numberBetween($min = 0000, $max = 9999),
                'tempatKerja' => $faker->city,
                'jabatan' => $faker->jobTitle,
                'tahunMasuk' => $faker->numberBetween($min = 2000, $max = 2021),
                'tahunKeluar' => $faker->numberBetween($min = 0000, $max = 2021),
                'alamatKerja' => $faker->address,
            ]);
    }
}
}