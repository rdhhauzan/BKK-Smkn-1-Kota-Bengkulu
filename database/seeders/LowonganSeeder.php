<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class LowonganSeeder extends Seeder
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
            \DB::table('lowongan_kerjas')->insert([
                'kerjaSamaId' => $faker->numberBetween($min = 0000, $max = 9999),
                'gambar' => $faker->imageUrl($width = 640, $height = 480),
                'usiaMinimal' => $faker->numberBetween($min = 19, $max = 25),
                'usiaMaksimal' => $faker->numberBetween($min = 25, $max = 45),
                'pendidikanMinimal' => $faker->word,
                'bidangPekerjaan' => $faker->jobTitle,
                'besaranGaji' => $faker->numberBetween($min = 0000000, $max = 9999999),
                'jurusanDibutuhkan' => $faker->word,
                'tanggalAkhir' => $faker->numberBetween($min = 0, $max = 31),
                'informasiTambahan' => $faker->word,
            ]);
    }
}
}