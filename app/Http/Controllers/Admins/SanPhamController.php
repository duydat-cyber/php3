<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //su dung cho 2 cach raw query va query builder
    // public $sanpham;

    // public function __construct()
    // {
    //     $this->sanpham = new SanPham();
    // }
    public function index()
    {
        //
        // lay du lieu ra
        $listSanPham = SanPham::get();
        return view('admins.sanpham.list', compact('listSanPham'));

        // dd($listSanPham);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        dd("day la crate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function test()
    // {
    //     //
    //     dd("dv");
    // }
}
