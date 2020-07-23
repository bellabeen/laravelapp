<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator ;

use Carbon\Carbon;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($x = 1; $x <= 10; $x++){
        //     DB::table('siswa')->insert([
        //         'kode_pendaftaran' => Str::random(10),
        //         'nama'
        //         ''
        //     ]);
        // }

        $faker = Faker\Factory::create('id_ID');
        for($i = 2; $i <=10; $i++){
            DB::table('siswa')->insert([
                'kode_pendaftaran' => $faker->numberBetween($min = 2, $max = 10), // 8567
                'nama_siswa'       => $faker->name,
                'jenis_kelamin' => $faker->randomDigit,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d'),
                'alamat' => $faker->address,
                'kelurahan' => $faker->stateAbbr,
                'kecamatan' => $faker->state,
                'kota' => $faker->city,
                'provinsi' => $faker->country,
                'nama_ortu' => $faker->name,
                'nomor_ortu' => $faker->biasedNumberBetween($min = 15, $max = 100, $function = 'sqrt'),
                'nomor_nik' => $faker->nik,
                'nomor_kk' => $faker->nik,
                'status' => $faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),
                'foto' => $faker->image('public/fotoupload',400,300, null, false),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
