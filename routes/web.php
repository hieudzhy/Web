<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\giohangController;
use App\Http\Controllers\thanhtoanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/nhanvien', function () {
    return view('admin.nhanvien.list');
});

Route::get('/admin/loaisanpham', function () {
    return view('admin.loaisanpham.list');
});

Route::get('/admin/nhacungcap', function () {
    return view('admin.nhacungcap.list');
});

Route::get('/admin/khachhang', function () {
    return view('admin.khachhang.list');
});

Route::get('/admin/loaisp', function () {
    return view('admin.loaisp.index');
});

Route::get('/admin/sanpham', function () {
    return view('admin.sanpham.list');
});

Route::get('/admin/tintuc', function () {
    return view('admin.tintuc.list');
});

Route::get('/admin/hoadonban', function () {
    return view('admin.hoadonban.list');
});

Route::get('/admin/cthoadonban', function () {
    return view('admin.cthoadonban.list');
});

Route::get('/admin/hoadonnhap', function () {
    return view('admin.hoadonnhap.list');
});

Route::get('/TT', function () {
    return view('trangchu.trangchu');
});
Route::get('/danhmuc', function () {
    return view('trangchu.danhmuc');
});
Route::get('/lienhe', function () {
    return view('trangchu.lienhe');
});
Route::get('/tintuc', function () {
    return view('trangchu.tintuc');
});


Route::get('/chitiet/{id}', [homeController::class, 'chitiet'])->name('chitiet');

Route::get('/LoaiSanPham/{id}', [homeController::class, 'DSLSP'])->name('LoaiSanPham');

//cart
Route::post('/savecart', [giohangController::class, 'save_cart']);
Route::get('/giohang', [giohangController::class, 'show_cart'])->name('xemgiohang');
Route::get('/delete-cart/{rowId}', [giohangController::class, 'delete_cart']);
Route::get('/update_quantity', [giohangController::class, 'update_quantity']);


//thanhtoan
Route::get('/thanhtoan', [thanhtoanController::class, 'index'])->name('thanhtoan');

Route::get('/checkout', [thanhtoanController::class, 'order_place'])->name('checkout');


//tintuc
Route::get('/tintuc', [homeController::class, 'tintuc'])->name('tintuc');
Route::get('/cttintuc/{id}', [homeController::class, 'cttintuc'])->name('cttintuc');



