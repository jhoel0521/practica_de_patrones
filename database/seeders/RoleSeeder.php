<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        $userRole = Role::firstOrCreate(['name' => 'secretario', 'guard_name' => 'web']);

        // Asignar permisos a roles
        $adminRole->givePermissionTo(['view tasks', 'create tasks', 'edit tasks', 'delete tasks']);
        $userRole->givePermissionTo(['view tasks', 'create tasks', 'edit tasks']);
    }
}
