<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'admin']);
       $role2 = Role::create(['name' => 'usuario']);

       Permission::create([ 'name' => 'admin.home']);
       Permission::create([ 'name' => 'admin.tiendas']);
       Permission::create([ 'name' => 'admin.index']);
       Permission::create([ 'name' => 'admin.create']);
       Permission::create([ 'name' => 'admin.edit']);
       Permission::create([ 'name' => 'admin.destroy']);

    }
}
