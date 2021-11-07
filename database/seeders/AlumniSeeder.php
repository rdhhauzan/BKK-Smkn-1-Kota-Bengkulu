<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class AlumniSeeder extends Seeder
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
            \DB::table('alumnis')->insert([
                'jurusanId' => $faker->randomDigit,
                'namaAlumni' => $faker->name,
                'tahunMasuk' => $faker->numberBetween($min = 2000, $max = 2013),
                'tahunLulus' => $faker->numberBetween($min = 2015, $max = 2021),
                'tempatLahir' => $faker->address,
                'tanggalLahir' => $faker->date($format = 'Y-m-d', $max = '2010-01-01'),
                'email' => $faker->email,
                'telephone' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'password' => $faker->password,
            ]);
    }
}
}