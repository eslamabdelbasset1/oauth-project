<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $editArticlesPermission = Permission::create(['name' => 'edit articles']);
        $deleteArticlesPermission = Permission::create(['name' => 'delete articles']);

        // Assign permissions to roles
        $adminRole->givePermissionTo([$editArticlesPermission->name, $deleteArticlesPermission->name]);
    }
}
