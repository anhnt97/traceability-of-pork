<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('treatments')->insert([
            'pig_id' => rand(1, 100),
            'drug_id' => rand(1, 5),
            'dose' => 'tiêm 1 mũi 10ml 1 lần duy nhất',
            'doctor' => $faker->name,
            'reason' => str_random(30),
            'result' => str_random(20),
            'start_at' => new Datetime,
            'finish_at' => new Datetime,
        ]);

        DB::table('treatments')->insert([
            'pig_id' => rand(1, 100),
            'drug_id' => rand(1, 5),
            'dose' => 'uống ngày 2 viên trong 3 ngày',
            'doctor' => $faker->name,
            'reason' => str_random(30),
            'result' => str_random(20),
            'start_at' => new Datetime,
            'finish_at' => new Datetime,
        ]);

        DB::table('treatments')->insert([
            'pig_id' => rand(1, 100),
            'drug_id' => rand(1, 5),
            'dose' => 'uống mỗi bữa 2 viên trong 1 tuần',
            'doctor' => $faker->name,
            'reason' => str_random(30),
            'result' => str_random(20),
            'start_at' => new Datetime,
            'finish_at' => new Datetime,
        ]);

        DB::table('treatments')->insert([
            'pig_id' => rand(1, 100),
            'drug_id' => rand(1, 5),
            'dose' => 'tiêm 2 mũi cách nhau 1 tuần',
            'doctor' => $faker->name,
            'reason' => str_random(30),
            'result' => str_random(20),
            'start_at' => new Datetime,
            'finish_at' => new Datetime,
        ]);

        DB::table('treatments')->insert([
            'pig_id' => rand(1, 100),
            'drug_id' => rand(1, 5),
            'dose' => 'uống ngày 2 viên trong 5 ngày',
            'doctor' => $faker->name,
            'reason' => str_random(30),
            'result' => str_random(20),
            'start_at' => new Datetime,
            'finish_at' => new Datetime,
        ]);
    }
}
