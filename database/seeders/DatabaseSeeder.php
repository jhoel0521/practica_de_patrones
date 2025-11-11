<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Task::create([
            'title' => 'Tarea de ejemplo 1',
            'description' => 'Descripción de la primera tarea.',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Tarea de ejemplo 2',
            'description' => 'Descripción de la segunda tarea.',
            'completed' => true,
        ]);
    }
}
