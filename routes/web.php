<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NhasxController;

Route::get('dangnhap', [UserController::class, 'showLoginForm'])->name('dangnhap');
Route::post('dangnhap', [UserController::class, 'login']);
Route::get('dangxuat', [UserController::class, 'logout'])->name('dangxuat');

Route::get('/dangky', [UserController::class, 'showRegistrationForm'])->name('dangky');
Route::post('/dangky', [UserController::class, 'register']);

Route::get('/themvaogio/{idsp}/{soluong}', [SiteController::class,'themvaogio']);
Route::get('/hiengiohang', [SiteController::class,'hiengiohang']);
Route::get('/xoasptronggio/{idsp}', [SiteController::class,'xoasptronggio']);
Route::post('/thanhtoan', [SiteController::class, 'thanhtoan'])->name('thanhtoan');


Route::get('/', [SiteController::class, 'index']);
Route::get('/lienhe', [SiteController::class, 'lienhe']);
Route::get('/gopy', [SiteController::class, 'gopy']);
Route::get('/chitietsp/{id}', [SiteController::class, 'chitietsp']);
Route::get('/sptheonhasx/{id_nhasx}', [SiteController::class, 'sptheonhasx']);
Route::get('/thongbao', [SiteController::class, 'thongbao']);
Route::post('/luubinhluan', [SiteController::class, 'luubinhluan']);

Route::group(['prefix' => 'admin', 'middleware' => [AdminMiddleware::class]], function () {
    Route::get('thoat', [AdminController::class, 'thoat']);
    Route::get('/sp', [AdminController::class, 'index']);
    Route::get('/daxoa', function(){ return view('admin.sanpham_daxoa');});
    Route::get('/sp/capnhat/{id}', [AdminController::class, 'capnhat']);
    Route::post('/sp/capnhat/{id}', [AdminController::class, 'capnhat_']);
    Route::post('/sp/xoa/{id}', [AdminController::class, 'xoa']);
    Route::get('/sp/them', [AdminController::class, 'them']);
    Route::post('/sp/them', [AdminController::class, 'them_']);

    Route::get('nhasx', [NhasxController::class, 'index'])->name('nhasx.index');
    Route::get('nhasx/them', [NhasxController::class, 'them'])->name('nhasx.them');
    Route::post('nhasx/them', [NhasxController::class, 'them_'])->name('nhasx.them_');
    Route::get('nhasx/capnhat/{id}', [NhasxController::class, 'capnhat'])->name('nhasx.capnhat');
    Route::post('nhasx/capnhat/{id}', [NhasxController::class, 'capnhat_'])->name('nhasx.capnhat_');
    Route::post('nhasx/xoa/{id}', [NhasxController::class, 'xoa'])->name('nhasx.xoa');

});
Route::get('admin/dangnhap', [AdminController::class, 'dangnhap']);
Route::post('admin/dangnhap', [AdminController::class, 'dangnhap_']);
Route::group(['prefix' => 'admin','middleware' => [AdminMiddleware::class] ], function() {
    Route::resource('loai', AdminController::class);
    Route::resource('sanpham', AdminController::class);
    Route::get('sanpham/khoi-phuc/{id}', [AdminController::class, 'khoiphuc']);
    Route::get('sanpham/xoa-vinh-vien/{id}', [AdminController::class, 'xoavinhvien']);
});