<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Pratikum9",
            'deadline' => "2024-06-07",
            'status' => "Sudah selesai",
            'deskripsi' => "Baru saja diselesaikan sesuai renggat waktu yang di tentukan"
        ]);

        Category::factory(5)->create();
    }
}
