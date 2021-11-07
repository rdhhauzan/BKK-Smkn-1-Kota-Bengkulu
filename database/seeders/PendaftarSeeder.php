<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class PendaftarSeeder extends Seeder
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
            \DB::table('pendaftar_kerjas')->insert([
                'lowonganId' => $faker->numberBetween($min = 0000, $max = 9999),
                'namaPendaftar' => $faker->name,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'pendidikanTerakhir' => $faker->word,
                'cv' => $faker->word,
                'ijazahTerakhir' => $faker->word,
            ]);
    }
}
}