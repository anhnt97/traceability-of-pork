<?php

use Illuminate\Database\Seeder;

class HandleDeadPigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('handle_dead_pigs')->insert([
            'batch_id' => 1,
            'amount' => rand(1, 5),
            'symptom' => 'chướng bụng, bỏ ăn',
            'vestige' => 'Heo có triệu chứng thần kinh, đi siêu vẹo, mất thăng bằng.',
            'executor' => $faker->name,
            'solution' => 'chôn',
        ]);

        DB::table('handle_dead_pigs')->insert([
            'batch_id' => 3,
            'amount' => rand(0, 5),
            'symptom' => 'Heo ói, một số táo bón, sau đó tiêu chảy.',
            'vestige' => 'các điểm xuất huyết điểm, mảng, nhồi huyết trên các cơ quan nội tạng',
            'executor' => $faker->name,
            'solution' => 'đốt',
        ]);

        DB::table('handle_dead_pigs')->insert([
            'batch_id' => 4,
            'amount' => rand(0, 5),
            'symptom' => 'Heo ủ rũ, sốt cao (40-41ºC), suy nhược.',
            'vestige' => 'bụng chướng to',
            'executor' => $faker->name,
            'solution' => 'chôn',
        ]);
    }
}
