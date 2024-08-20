<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creación de roles	
        $rolSuperAdmin = Role::create(['name' => 'Super Administrador']);
        $rolOrganizador = Role::create(['name' => 'Organizador']);
        $rolUser = Role::create(['name' => 'Usuario']);

        // Creación de permisos
        Permission::create(['name' => 'Crear evento'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Eliminar evento'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Modificar evento'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Ver evento'])->syncRoles([$rolSuperAdmin, $rolOrganizador, $rolUser]);
        Permission::create(['name' => 'Crear categoria'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Eliminar categoria'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Modificar categoria'])->syncRoles([$rolSuperAdmin, $rolOrganizador]);
        Permission::create(['name' => 'Administrador configuracion'])->syncRoles([$rolSuperAdmin]);
    }

}
