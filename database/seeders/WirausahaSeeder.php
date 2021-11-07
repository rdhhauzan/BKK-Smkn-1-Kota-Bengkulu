<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class WirausahaSeeder extends Seeder
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
            \DB::table('wirausahas')->insert([
                'alumniId' => $faker->numberBetween($min = 0000, $max = 9999),
                'namaUsaha' => $faker->company,
                'bidangUsaha' => $faker->jobTitle,
                'tahunMasuk' => $faker->year
                ]);
    }
}
}