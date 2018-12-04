<?php

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([
            'farm_id' => 1,
            'import_id' => 1,
            'amount' => 30,
            'status' => 'Tốt',
            'breed' => 'Lợn Móng Cái',
            'breed_description' => 'Thịt thơm ngon, dễ nuôi, đẻ mắn, đẻ sai, thân thiện với con người, chịu được kham khổ,chống đỡ bệnh tật tốt ',
            'origin' => 'TP Móng Cái, tỉnh Quảng Ninh',
            'last_vaccination' => '2018-02-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 1,
            'import_id' => 2,
            'amount' => 29,
            'status' => 'Chuẩn bị xuất chuồng',
            'breed' => 'Lợn Đại Bạch',
            'breed_description' => 'Toàn thân có màu trắng, lông cứng, tai mỏng đứng thẳng hoặc hơi hướng về phía trước, vai đầy đặn, ngực sâu rộng, lưng hông rộng và bằng, mình dài',
            'origin' => 'Trại ABC, tỉnh Hải Dương',
            'last_vaccination' => '2018-03-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 2,
            'import_id' => 3,
            'amount' => 30,
            'status' => 'Mới nhập',
            'breed' => 'Lợn ỉ',
            'breed_description' => 'Lông và da của lợn này có màu đen tuyền, đầu tương đối nhỏ, chân khá ngắn, tai đứng, mặt nhăn, lưng võng, bụng phệ, đuôi thẳng',
            'origin' => 'Trại XYZ, tỉnh Hưng Yên',
            'last_vaccination' => '2018-12-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 2,
            'import_id' => 4,
            'amount' => 23,
            'status' => 'Có con bị bệnh, cần cách ly',
            'breed' => 'Lợn Ba Xuyên',
            'breed_description' => 'ó khối lượng trưởng thành đạt 120–150 kg, đẻ bình quân 8-9 con/lứa, nuôi con khéo. Mỡ nhiều, tỷ lệ nạc chỉ đạt 39-40%',
            'origin' => 'Ba Xuyên, Sóc Trăng',
            'last_vaccination' => '2018-12-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 1,
            'import_id' => 5,
            'amount' => 30,
            'status' => 'Tốt',
            'breed' => 'Lợn mán',
            'breed_description' => 'nặng trên dưới 10 kg, lưng cong, bụng ỏng rất dễ thương, thịt rất săn chắc, rất thông minh và thích sạch sẽ',
            'origin' => 'Vị Xuyên, Hà Giang',
            'last_vaccination' => '2018-12-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 3,
            'import_id' => 6,
            'amount' => 20,
            'status' => 'Tốt',
            'breed' => 'Lợn Móng Cái',
            'breed_description' => 'Thịt thơm ngon, dễ nuôi, đẻ mắn, đẻ sai, thân thiện với con người, chịu được kham khổ,chống đỡ bệnh tật tốt ',
            'origin' => 'Đông Triều, tỉnh Quảng Ninh',
            'last_vaccination' => '2018-12-04',
        ]);

        DB::table('batches')->insert([
            'farm_id' => 4,
            'import_id' => 7,
            'amount' => 17,
            'status' => 'Tốt',
            'breed' => 'Lợn mán',
            'breed_description' => 'nặng trên dưới 10 kg, lưng cong, bụng ỏng rất dễ thương, thịt rất săn chắc, rất thông minh và thích sạch sẽ',
            'origin' => 'Vị Xuyên, Hà Giang',
            'last_vaccination' => '2018-12-04',
        ]);
    }
}
