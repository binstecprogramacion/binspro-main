<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::create(['name' => 'user']);
        $this->createPermission('dashboard', $user);
        $technical = Role::create(['name' => 'technical']);
        $this->createPermission('dashboard', $technical);
        $this->createPermission('incidents', $technical);
    }

    public function createPermission($name, $role)
    {
        $permission = Permission::where('name', $name)->first();
        if ($permission == null) {
            Permission::create(['name' => $name])->assignRole($role);
        } else {
            $permission->assignRole($role);
        }
    }
}
