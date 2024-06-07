<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    protected $fillable = ['name', 'deadline', 'status', 'deskripsi'];

    //medifinisikan data tugas
    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-05-31',
    //         'status' => 'belum selesai',
    //         'deskripsi' => 'Mengerjakan tugas bahasa ingris chapter3 di buku LKS halaman 10-25'
    //     ], [
    //         'id' => 1,
    //         'name' => 'Fisika',
    //         'deadline' => '2024-05-31',
    //         'status' => 'belum selesai',
    //         'status' => 'belum selesai',
    //         'deskripsi' => 'Mengerjakan tugas bahasa ingris chapter3 di buku LKS halaman 10-33'
    //     ], [
    //         'id' => 1,
    //         'name' => 'Matematika',
    //         'deadline' => '2024-05-31',
    //         'status' => 'belum selesai',
    //         'deskripsi' => 'Mengerjakan tugas bahasa ingris chapter3 di buku LKS halaman 10-20'
    //     ], [
    //         'id' => 1,
    //         'name' => 'Biologi',
    //         'deadline' => '2024-05-31',
    //         'status' => 'belum selesai',
    //         'deskripsi' => 'Mengerjakan tugas bahasa ingris chapter3 di buku LKS halaman 10-23 sampai selesai semua jangan sampai ada satu pun yang tidak dijawab'
    //     ],
    // ];
    // // method untuk mendapatkan data tugas
    // public static function getAll()
    // {
    //     return self::$tasks;
    // }
}
