<?php

use Illuminate\Support\Facades\Route;
use App\Models\CateNew;
use App\Models\Post;
use App\Models\Ads;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NguoidungController;
use App\Http\Controllers\QuangcaoController;

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

Route::get('/', [TintucController:: class, 'index']);

Route::get('/chi-tiet/{id}', [TintucController:: class, 'chiTiet']);

Route::get('/danh-muc/{id}', [TintucController:: class, 'danhMuc']);

Route::get('/tin', [TintucController:: class, 'dsTin']);

Route::get('contact', [ContactController:: class, 'contact']);

Route::get('/tim-kiem', [TintucController::class, 'timKiem']);

Route::post('/tin/them', [BinhluanController::class, 'binhLuan']);

Route::get('/admin', [adminController::class, 'index'])->middleware('auth','checkAdmin');

// Quản lý danh mục
Route::get('/admin/category', [AdminController::class, 'danhMuc'])->middleware('auth','checkAdmin');

Route::view('/admin/category_add', '/admin/add_cate')->middleware('auth','checkAdmin');
Route::post('/admin/category_add', [DanhmucController::class, 'category_add'])->middleware('auth','checkAdmin');

Route::get('/admin/category_update/{id}', [DanhmucController::class, 'showUpdate'])->middleware('auth','checkAdmin');
Route::post('/admin/category_update/{id}', [DanhmucController::class, 'category_update'])->middleware('auth','checkAdmin');

Route::get('/admin/category/delete/{id}', [DanhmucController::class, 'category_delete']);

// Quản lý người dùng
Route::get('/admin/user', [NguoidungController::class, 'nguoiDung'])->middleware('auth','checkAdmin');
Route::view('/admin/user_add', '/admin/add_user')->middleware('auth','checkAdmin');
Route::post('/admin/user_add', [NguoidungController::class, 'user_add'])->middleware('auth','checkAdmin');

Route::get('/admin/user_update/{id}', [NguoidungController::class, 'showUpdate'])->middleware('auth','checkAdmin');
Route::post('/admin/user_update/{id}', [NguoidungController::class, 'user_update'])->middleware('auth','checkAdmin');

Route::get('/admin/user/delete/{id}', [NguoidungController::class, 'user_delete']);

// Quản lý bình luận
Route::get('/admin/comment', [BinhluanController::class, 'getAll'])->middleware('auth','checkAdmin');

// Quản lý Bài viết
Route::get('/admin/post', [TintucController::class, 'getAll'])->middleware('auth','checkAdmin');

Route::get('/admin/post_add', [TintucController::class, 'view_add'])->middleware('auth','checkAdmin');
Route::post('/admin/post_add', [TintucController::class, 'post_add'])->middleware('auth','checkAdmin');

Route::get('/admin/post_update/{id}', [TintucController::class, 'showUpdate'])->middleware('auth','checkAdmin');
Route::post('/admin/post_update/{id}', [TintucController::class, 'post_update'])->middleware('auth','checkAdmin');

Route::get('/admin/post/delete/{id}', [TintucController::class, 'deletePost']);

// Quản lý Quảng cáo
Route::get('/admin/ads', [QuangcaoController::class, 'getAll'])->middleware('auth','checkAdmin');

Route::get('/admin/ads_add', [QuangcaoController::class, 'view_add'])->middleware('auth','checkAdmin');
Route::post('/admin/ads_add', [QuangcaoController::class, 'ads_add'])->middleware('auth','checkAdmin');

Route::get('/admin/ads_update/{id}', [QuangcaoController::class, 'showUpdate'])->middleware('auth','checkAdmin');
Route::post('/admin/ads_update/{id}', [QuangcaoController::class, 'ads_update'])->middleware('auth','checkAdmin');

Route::get('/admin/ads/delete/{id}', [QuangcaoController::class, 'deleteAds']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
