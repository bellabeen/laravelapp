<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator ;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create('id_ID');

        for($i = 2; $i <=10; $i++){
            DB::table('siswa')->insert([
                'nisn' => $faker->nik,
                'semester_1' => $faker->numberBetween($min = 70, $max = 100), // 8567
                'semester_2' => $faker->numberBetween($min = 70, $max = 100), // 8567
                'semester_3' => $faker->numberBetween($min = 70, $max = 100), // 8567
                'semester_4' => $faker->numberBetween($min = 70, $max = 100), // 8567
                'semester_5' => $faker->numberBetween($min = 70, $max = 100), // 8567
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
