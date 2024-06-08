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

Route::get('/tasks/list', [TaskController::class, 'list'])->name('tasks.list');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
