<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
        $data = [];
        $data['title'] = "Trang ADMIN";
        return view('admins.index', $data);
    }
}
