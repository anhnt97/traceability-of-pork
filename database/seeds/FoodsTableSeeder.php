<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('foods')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('foods')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('foods')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('foods')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('foods')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);
    }
}
