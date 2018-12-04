<?php

use Illuminate\Database\Seeder;

class SellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('sells')->insert([
            'batch_id' => rand(1, 8),
            'amount' => rand(10, 25),
            'seller' => $faker->name,
            'buyer' => $faker->name,
            'buyer_address' => $faker->address,
            'last_treatment' => new Datetime,
            'sell_at' => new Datetime,
        ]);

        DB::table('sells')->insert([
            'batch_id' => rand(1, 8),
            'amount' => rand(10, 25),
            'seller' => $faker->name,
            'buyer' => $faker->name,
            'buyer_address' => $faker->address,
            'last_treatment' => new Datetime,
            'sell_at' => new Datetime,
        ]);

        DB::table('sells')->insert([
            'batch_id' => rand(1, 8),
            'amount' => rand(10, 25),
            'seller' => $faker->name,
            'buyer' => $faker->name,
            'buyer_address' => $faker->address,
            'last_treatment' => new Datetime,
            'sell_at' => new Datetime,
        ]);

        DB::table('sells')->insert([
            'batch_id' => rand(1, 8),
            'amount' => rand(10, 25),
            'seller' => $faker->name,
            'buyer' => $faker->name,
            'buyer_address' => $faker->address,
            'last_treatment' => new Datetime,
            'sell_at' => new Datetime,
        ]);

        DB::table('sells')->insert([
            'batch_id' => rand(1, 8),
            'amount' => rand(10, 25),
            'seller' => $faker->name,
            'buyer' => $faker->name,
            'buyer_address' => $faker->address,
            'last_treatment' => new Datetime,
            'sell_at' => new Datetime,
        ]);
    }
}
