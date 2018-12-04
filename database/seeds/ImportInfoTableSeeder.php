<?php

use Illuminate\Database\Seeder;

class ImportInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('import_info')->insert([
            'amount' => 30,
            'average_weight' => 15,
            'last_treatment' => '2018-12-04',
            'drug' => 'Bocin-pharm',
            'stop_drug_date' => '2018-12-04',
            'quarantine_place' => 'Cau Giay, Hanoi',
            'receiver' => 'Nguyen Van A',
            'import_at' => '2018-12-04',
        ]);

        Db::table('import_info')->insert([
            'amount' => 20,
            'average_weight' => 12,
            'last_treatment' => '2018-02-04',
            'drug' => 'Bocin',
            'stop_drug_date' => '2018-02-04',
            'quarantine_place' => 'Ba Dinh, Hanoi',
            'receiver' => 'Nguyen Van B',
            'import_at' => '2018-02-04',
        ]);

        Db::table('import_info')->insert([
            'amount' => 35,
            'average_weight' => 10,
            'last_treatment' => '2018-01-04',
            'drug' => 'Bocin-pharm',
            'stop_drug_date' => '2018-01-04',
            'quarantine_place' => 'Hai Ba Trung, Hanoi',
            'receiver' => 'Nguyen Van C',
            'import_at' => '2018-01-04',
        ]);

        Db::table('import_info')->insert([
            'amount' => 30,
            'average_weight' => 20,
            'last_treatment' => '2018-12-04',
            'drug' => 'Bocin-pharm',
            'stop_drug_date' => '2018-12-04',
            'quarantine_place' => 'Dong Da, Hanoi',
            'receiver' => 'Nguyen Van D',
            'import_at' => '2018-12-04',
        ]);

        Db::table('import_info')->insert([
            'amount' => 30,
            'average_weight' => 17,
            'last_treatment' => '2018-12-04',
            'drug' => 'Bocin-pharm',
            'stop_drug_date' => '2018-12-04',
            'quarantine_place' => 'Hoan Kiem, Hanoi',
            'receiver' => 'Nguyen Van E',
            'import_at' => '2018-12-04',
        ]);
    }
}
