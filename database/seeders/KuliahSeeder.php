<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class KuliahSeeder extends Seeder
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
            // insert data ke table siswa menggunakan Faker
            \DB::table('kerja_samas')->insert([
                'alumniId' => $faker->numberBetween($min = 1000, $max = 9000),
                'tempatKuliah' => $faker->city,
                'jurusan' => $faker->word,
                'tahunMasuk' => $faker->numberBetween($min = 2015, $max = 2021),
                'alamat' => $faker->address,
            ]);
    }
}
}