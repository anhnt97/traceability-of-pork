<?php

use Illuminate\Database\Seeder;

class PigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Pig::class, 100)->create();
    }
}
