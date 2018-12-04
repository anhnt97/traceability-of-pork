<?php

use Illuminate\Database\Seeder;

class FoodMixTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('food_mix')->insert([
            'food_id' => rand(1, 5),
            'drug_id' => rand(1, 5),
            'mix_rate' => 'Cho 1ml vào 1kg thức ăn',
            'mixer' => $faker->name,
        ]);

        DB::table('food_mix')->insert([
            'food_id' => rand(1, 5),
            'drug_id' => rand(1, 5),
            'mix_rate' => 'Cho 1 lọ vào 1kg thức ăn',
            'mixer' => $faker->name,
        ]);

        DB::table('food_mix')->insert([
            'food_id' => rand(1, 5),
            'drug_id' => rand(1, 5),
            'mix_rate' => 'Cho 10ml vào 0,5kg thức ăn',
            'mixer' => $faker->name,
        ]);

        DB::table('food_mix')->insert([
            'food_id' => rand(1, 5),
            'drug_id' => rand(1, 5),
            'mix_rate' => 'Cho 1 gói vào 5kg thức ăn',
            'mixer' => $faker->name,
        ]);

        DB::table('food_mix')->insert([
            'food_id' => rand(1, 5),
            'drug_id' => rand(1, 5),
            'mix_rate' => 'Cho 10ml vào 2kg thức ăn',
            'mixer' => $faker->name,
        ]);
    }
}
