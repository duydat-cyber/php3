<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert(
                [
                    'title' => 'Hạ Đỏ',
                    'thumbnail' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1587797857i/12456458.jpg',
                    'author' => 'Nguyễn Nhật Ánh',
                    'publisher' => 'Nhà Xuất Bản Trẻ',
                    'publication' => fake()->date(),
                    'price' => fake()->randomFloat(3, 10, 100),
                    'quantity' => fake()->randomNumber(2),
                    'category_id' => rand(1, 4),
                ]
            );
        }
    }
}
