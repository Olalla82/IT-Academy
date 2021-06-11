<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'jugador']);

        $permission1 = Permission::create(['name' => 'Jugar'])->assignRole($role2);
        $permission2 = Permission::create(['name' => 'Editar'])->syncRoles([$role1, $role2]);
       

      
    }
}
