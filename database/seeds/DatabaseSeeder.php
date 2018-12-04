<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FarmsTableSeeder::class);
        $this->call(ImportInfoTableSeeder::class);
        $this->call(BatchesTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(PigsTableSeeder::class);
        $this->call(EquipmentsTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(FoodMixTableSeeder::class);
        $this->call(FeedsTableSeeder::class);
        $this->call(HandleDeadPigsTableSeeder::class);
        $this->call(SellsTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
        $this->call(VaccinationsTableSeeder::class);
    }
}
