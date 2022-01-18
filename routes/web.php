<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TambahPerusahaanController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardPembimbingController;
use App\Http\Controllers\DashboardKoordinatorController;
use App\Http\Controllers\DaftarPraktikIndustriController;

Route::get('/', function (){
   return view('home');
})->name('home');

Route::get('/dashboard/mahasiswa', [DashboardMahasiswaController::class,'index'])
   ->name('dashboard.mahasiswa')
   ->middleware('auth','mahasiswa');

Route::get('/dashboard/koordinator', [DashboardKoordinatorController::class,'index'])
   ->name('dashboard.koordinator')
   ->middleware('auth','koordinator');

Route::get('/dashboard/pembibing', [DashboardPembimbingController::class,'index'])
   ->name('dashboard.pembimbing')
   ->middleware('auth','pembimbing');

Route::post('/logout', [LogoutController::class,'store'])->name('logout');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/posts',[PostController::class, 'index'])->name('posts');
Route::post('/posts',[PostController::class, 'store']);
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes',[PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes',[PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/tambahperusahaan',[TambahPerusahaanController::class, 'index'])->name('tambah.perusahaan');
Route::post('/tambahperusahaan',[TambahPerusahaanController::class, 'store']);

Route::get('/daftarperusahaan',[DaftarPraktikIndustriController::class, 'index'])->name('daftar.perusahaan');
Route::post('/daftarperusahaan',[DaftarPIController::class, 'store']);

Route::get('/perusahaan/{company}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
Route::post('/perusahaan/{perusahaan}/daftar',[PerusahaanController::class, 'store'])->name('perusahaan.daftar');

Route::get('/jurnal/{user:username}',[JurnalController::class, 'index'])->name('jurnal');
Route::post('/jurnal',[JurnalController::class, 'store'])->name('jurnal.submit');