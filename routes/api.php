<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\nhanvienController;
use App\Http\Controllers\Admin\loaispController;
use App\Http\Controllers\Admin\nhacungcapController;
use App\Http\Controllers\Admin\khachhangController;
use App\Http\Controllers\Admin\sanphamController;
use App\Http\Controllers\Admin\hoadonbanController;
use App\Http\Controllers\Admin\hoadonnhapController;
use App\Http\Controllers\Admin\cthoadonbanController;
use App\Http\Controllers\Admin\tintucController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('nhanvien', Nhanviencontroller::class);
Route::resource('loaisanpham', loaispController::class);
Route::resource('nhacungcap', nhacungcapController::class);
Route::resource('khachhang', khachhangController::class);
Route::resource('loaisp', loaispController::class);
Route::resource('sanpham', sanphamController::class);
Route::resource('tintuc', tintucController::class);
Route::resource('hoadonban', hoadonbanController::class);
Route::resource('cthoadonban', cthoadonbanController::class);
Route::resource('hoadonnhap', hoadonnhapController::class);




