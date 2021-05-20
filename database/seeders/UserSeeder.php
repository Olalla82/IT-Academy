<?php

namespace Database\Seeders;

use Spatie\Permission\Exceptions\Role;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Olalla Malpartida',
            'email' => 'omrtecson@gmail.com',
            'password' => bcrypt('olallaolalla'),
        ])->assignRole('Admin');

        User::factory(10)->create();
    }
}
