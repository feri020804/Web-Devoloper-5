<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => "Mate-matika",
            'deadline' => "2024-08-07",
            'status' => "Sedang dikerjain",
            'deskripsi' => "Tugas ini baru dikerjain hari ini"
        ]);

        Task::factory(5)->create();
    }
}
