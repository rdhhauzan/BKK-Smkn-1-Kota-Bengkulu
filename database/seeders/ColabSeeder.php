<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ColabSeeder extends Seeder
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
                'namaPerusahaan' => $faker->company,
                'jenisPerusahaan' => $faker->company,
                'alamat' => $faker->address,
                'tahunKerjaSama' => $faker->year,
            ]);
    }
}
}