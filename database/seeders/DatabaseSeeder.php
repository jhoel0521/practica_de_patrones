<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear permisos
        Permission::firstOrCreate(['name' => 'view tasks', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'create tasks', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'edit tasks', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'delete tasks', 'guard_name' => 'web']);

        // Crear roles
        $adminRole = Role::firstOrCreate(['name' => 'administrador', 'guard_name' => 'web']);
        $secretarioRole = Role::firstOrCreate(['name' => 'secretario', 'guard_name' => 'web']);

        // Asignar permisos a roles
        $adminRole->syncPermissions(['view tasks', 'create tasks', 'edit tasks', 'delete tasks']);
        $secretarioRole->syncPermissions(['view tasks', 'create tasks', 'edit tasks']);

        // Crear usuarios
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ])->assignRole('administrador');

        User::factory()->create([
            'name' => 'Secretario User',
            'email' => 'secretario@example.com',
            'password' => bcrypt('password'),
        ])->assignRole('secretario');

        // Crear tareas de ejemplo
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
