<?php

use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);

        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);

        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);

        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);

        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);

        DB::table('equipments')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'repository' => 'kho số '.rand(1,10),
            'receiver' => $faker->name,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
        ]);
    }
}
