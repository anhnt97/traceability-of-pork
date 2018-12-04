<?php

use Illuminate\Database\Seeder;

class VaccinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('vaccinations')->insert([
            'batch_id' => rand(1, 8),
            'name' => 'phòng dịch tả',
            'dose' => 'tiêm 1 mũi 10ml',
            'doctor' => $faker->name,
            'purpose' => str_random(30),
            'result' => str_random(20),
        ]);

        DB::table('vaccinations')->insert([
            'batch_id' => rand(1, 8),
            'name' => 'phòng giun sán',
            'dose' => 'mỗi con 1 viên',
            'doctor' => $faker->name,
            'purpose' => str_random(30),
            'result' => str_random(20),
        ]);

        DB::table('vaccinations')->insert([
            'batch_id' => rand(1, 8),
            'name' => 'phòng dịch tả',
            'dose' => 'tiêm 1 mũi 10ml',
            'doctor' => $faker->name,
            'purpose' => str_random(30),
            'result' => str_random(20),
        ]);


        DB::table('vaccinations')->insert([
            'batch_id' => rand(1, 8),
            'name' => 'phòng đậu mùa',
            'dose' => 'mỗi con 2 viên',
            'doctor' => $faker->name,
            'purpose' => str_random(30),
            'result' => str_random(20),
        ]);

        DB::table('vaccinations')->insert([
            'batch_id' => rand(1, 8),
            'name' => 'phòng dịch',
            'dose' => 'tiêm 1 mũi 10ml',
            'doctor' => $faker->name,
            'purpose' => str_random(30),
            'result' => str_random(20),
        ]);

    }
}
