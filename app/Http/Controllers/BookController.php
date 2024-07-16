<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // Danh Sach
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('books.*', 'name')
            ->orderByDesc('books.id')
            ->get();
        return view('admins.books.index',compact('books'));
    }

    // Hien Thi form create
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admins.books.create', compact('categories'));
    }

    // luu du lieu cua form create
    public function store(Request $request)
    {
        $data = [
            'title'=> $request['title'],
            'thumbnail'=> $request['thumbnail'],
            'author'=> $request['author'],
            'publisher'=> $request['publisher'],
            'publication'=> $request['publication'],
            'price'=> $request['price'],
            'quantity'=> $request['quantity'],
            'category_id'=> $request['category_id'],
        ];
        DB::table('books')->insert($data);
        return redirect()->route('index');
    }
    // xoa sach
    public function destroy($id)
    {
        // Ensure to delete the book using the correct syntax
        DB::table('books')->where('id', $id)->delete();
        return redirect()->route('index')->with('success', 'Bố đã xóa thành công');
    }
    // Hien thi form edit
    public function edit($id) {
        $book = DB::table('books')->where('id', $id)->first();
        // dd($book);
        $categories = DB::table('categories')->get();
        return view('admins.books.edit', compact('book', 'categories'));
        

    }

    // cap nhat du lieu len database
    public function update(Request $request) {
        $data = [
            'title'=> $request['title'],
            'thumbnail'=> $request['thumbnail'],
            'author'=> $request['author'],
            'publisher'=> $request['publisher'],
            'publication'=> $request['publication'],
            'price'=> $request['price'],
            'quantity'=> $request['quantity'],
            'category_id'=> $request['category_id'],
        ];
        DB::table('books')->where('id',$request['id'])->update($data);
        return redirect()->route('index');
    }
}
