<?php

// use App\Http\Controllers\AdminController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\KhachHangController;
// use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// tao route de tro den view
// 
// Route::get('/hello', function () {
//     return view('xinchao');

// });
// Route::view('/hello', 'xinchao');


// truyen du lieu sang view
// Route::get('/hello', function () {
//     $title = "ahii";
//     $text = "ahihi";
//     return view('xinchao', ['title' => $title, 'text' => $text]);
// });

// Route::view('/hello', 'xinchao', [
//     'title' => 'ahii',
//     'text' => 'ahii'
// ]);

// tao 1 route de tro den ham trong controller

// Route::get('/san_pham', [SanPhamController::class, 'index']);
// Route::get('/khach_hang', [KhachHangController::class, 'index']);
// Route::get('/them_kh', [KhachHangController::class, 'themkh'])->name('them_kh');
// Route::get('/sua_kh/{id}', [KhachHangController::class, 'chinhsua'])->name('sua_kh');
// Route::get('/danh_sach', [KhachHangController::class, 'danhsach'])->name('danh_sach');

// Route::get('/admin', [AdminController::class, 'index']);
Route::get('/homectl', [HomeController::class, 'index']);


// Route resource

// Route::get('sanpham/test', [SanPhamController::class, 'test'])->name('sanpham.test');
// Route::resource('san_pham', SanPhamController::class);

Route::prefix('category')->group(function () {
    Route::get('/list', [CategoryController::class, 'index'])->name('category.index');
});
Route::get('book', [BookController::class, 'index'])->name('index');
Route::get('create', [BookController::class, 'create'])->name('create');
Route::post('create', [BookController::class, 'store'])->name('store');
Route::get('edit/{id}', [BookController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [BookController::class, 'update'])->name('update');
Route::delete('delete/{id}', [BookController::class, 'destroy'])->name('destroy');
