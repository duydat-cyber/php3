<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('khach_hangs')->insert([
            [
                'ma_khach_hang' => 'dev1',
                'ten_khach_hang' => 'nguyendacquann',
                'so_dien_thoai' => '099999999',
                'dia_chi' => 'Bac Ninh',
                'email' => 'dqdev204vn@gmail.com'

            ],
            [
                'ma_khach_hang' => 'dev2',
                'ten_khach_hang' => 'nguyendacquan',
                'so_dien_thoai' => '098888888',
                'dia_chi' => 'Bac Ninh',
                'email' => 'dqdev204vn@gmail.com'

            ]
        ]);
    }
}
