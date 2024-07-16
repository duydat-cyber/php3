<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
            [
                // ['name' => 'Hạ Đỏ'],
                // ['name' => 'Những Bông Hoa Vàng trên cỏ xanh'],
                // ['name' => 'Mùa hè không tên'],
                // ['name' => 'Mắt biếc'],
                // ['name' => 'Có hai con mèo ngồi bên cửa sổ']
                ['name' => 'Sách truyện'],
                ['name' => 'Tiểu thuyết'],
                ['name' => 'Manga'],
                ['name' => 'SGK'],
                ['name' => 'Sách chinh thám']
            ]
        );
    }
}
