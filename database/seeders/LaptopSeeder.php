<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; ++$i) {
            DB::table('laptop')->insert([
                'merk' => $faker->word,
                'type' => $faker->word,
                'cpu' => $faker->word,
                'ram' => $faker->randomNumber(2),
                'storage' => $faker->randomNumber(2),
                'resolusi_layar' => $faker->word,
                'vga' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
