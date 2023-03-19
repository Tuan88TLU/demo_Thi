<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'name' => 'Nguyễn Văn Tuấn',
                'class' => '62TH',
                'place' => 'Vĩnh Phúc',
            ],

            [
                'name' => 'Nguyễn Thanh Hưng',
                'class' => '62TH',
                'place' => 'Hà Nội',
            ],

            [
                'name' => 'Đàm Hữu Thành',
                'class' => '62TH2',
                'place' => 'Vĩnh Phúc',
            ],
        ]);
    }
}
