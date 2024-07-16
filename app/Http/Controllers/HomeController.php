<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // dd(123);
        // $title = "Trang chu";
        // return view('clients.index', ['title' => $title]);

        $data = [];
        $data['title'] = "Trang chủ";
        $data['content'] = "DAY LA CONTENT";
        $data['text'] = "<u>ABDAJBWBJBWJDBABDJBAWDBAJWVDUV</u>";
        $data['demso'] = 1;
        $data['dataArr'] = [
            'Item1',
            'Item2',
            'Item3'
        ];
        return view('clients.index', $data);
    }
}
