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
        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'reservas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'reservas.create'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'reservas.edit'])->assignRole($role1);
        Permission::create(['name' => 'reservas.delete'])->assignRole($role1);

        //$role1->permissions()->attach(1,2,3,4,5);
    }
}
