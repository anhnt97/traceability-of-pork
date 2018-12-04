<?php

use Illuminate\Database\Seeder;

class FarmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Farm::class, 10)->create();
    }
}
