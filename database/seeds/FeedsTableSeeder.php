<?php

use Illuminate\Database\Seeder;

class FeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('feeds')->insert([
            'batch_id' => 1,
            'mix_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 2,
            'food_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 3,
            'mix_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 4,
            'mix_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 5,
            'food_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 6,
            'mix_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 7,
            'food_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);

        DB::table('feeds')->insert([
            'batch_id' => 8,
            'food_id' => rand(1, 5),
            'mass' => rand(5, 30),
            'feeder' => $faker->name,
        ]);
    }
}
