<?php

use Illuminate\Database\Seeder;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('drugs')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'effect' => 'Chữa tiêu chảy',
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);
    
        DB::table('drugs')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'effect' => 'Chữa tụ huyết trùng',
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('drugs')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'effect' => '2019-03-02',
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('drugs')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'effect' => 'Chữa E coli',
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);

        DB::table('drugs')->insert([
            'name' => str_random(10),
            'amount' => rand(20, 50),
            'effect' => 'Chữa chướng bụng',
            'expiry_at' => new DateTime,
            'store_name' => $faker->lastName,
            'store_address' => $faker->address,
            'receiver' => $faker->name,
        ]);
    }
}
