<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});
/**
 * HTTP methods;
 * 1.Get untuk menampilkan sesuatu
 * 2.Post untuk menambahkan data
 * 3.Put unyuk mengubah data
 * 4.delete untuk menghapus data
 */
// route untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index']);
