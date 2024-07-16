<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;
    // cach 1 su dung raw query (SQL Thuan)
    // public function getList()
    // {

    //     $listSanPham = DB::select('SELECT * FROM san_phams');
    //     return $listSanPham;
    // }
    // public function getList()
    // {

    //     $listSanPham = DB::table('san_phams')->get();
    //     return $listSanPham;
    // }

    // cach 3 su dung eloquent
    protected $table = 'san_phams';
    protected $fillbale = [
        'ma_san_pham', 'ten_sam_pham', 'gia', 'so_luong', 'ngay_nhap', 'mo_ta', 'trang_thai',
    ];


}
