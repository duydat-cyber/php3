<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // noi xu ly de tao ra cac du lieu mau
        // su dung query builder de them du lieu 
        // Tao du lieu mau bang faker trong laravel
        DB::table('san_phams')->insert([
            [
                //  1 ban ghi
                'ma_san_pham' => 'h1',
                'ten_san_pham' => 'hhh',
                'gia' => 100000,
                'so_luong' => 10,
                'ngay_nhap' => '2024-06-28',
                'mo_ta' => 'acb',
                'trang_thai' => true
            ],
            [
                // 1 ban ghi
                'ma_san_pham' => 'h2',
                'ten_san_pham' => 'hh',
                'gia' => 200000,
                'so_luong' => 10,
                'ngay_nhap' => '2024-06-28',
                'mo_ta' => 'acb',
                'trang_thai' => true
            ]

        ]);
    }
}
