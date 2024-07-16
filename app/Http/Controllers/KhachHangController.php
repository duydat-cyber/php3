<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{

    public function index()
    {
        return view('khachhang.index');
    }

    public function danhsach()
    {

        $danhSach = DB::table('khach_hangs')->get();
        //      tenthumuc/file
        return view(
            'khachhang.danhsach',
            ['danhSach' => $danhSach]
        );
    }

    public function themkh()
    {
        return view(
            'khachhang.themkh'
        );
    }

    public function chinhsua($id)
    {

        $khachHang = DB::table('khach_hangs')->where('id', $id)->first();
        // dd($khachHang);
        return view('khachhang.chinhsuakh', ['khachHang' => $khachHang]);
    }
}
