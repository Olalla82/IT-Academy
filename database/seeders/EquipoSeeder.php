<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipo = new Equipo();
        
        $equipo->nombre = 'FC.Barcelona';
        $equipo->estadio = 'Camp Nou';
        $equipo->save();

        $equipo2 = new Equipo();
        
        $equipo2->nombre = 'Real Madrid';
        $equipo2->estadio = 'Santiago Brenabeu';
        $equipo2->save();

        $equipo3 = new Equipo();
        
        $equipo3->nombre = 'Sevilla';
        $equipo3->estadio = 'Ramon Sanchez Pijuan';
        $equipo3->save();

        $equipo4 = new Equipo();
        
        $equipo4->nombre = 'Betis';
        $equipo4->estadio = 'Benito Villamarín';
        $equipo4->save();

        $equipo5 = new Equipo();
        
        $equipo5->nombre = 'Español';
        $equipo5->estadio = 'RCDE Estadium';
        $equipo5->save();

        $equipo6 = new Equipo();
        
        $equipo6->nombre = 'Deportivo Coruña';
        $equipo6->estadio = 'Riazor';
        $equipo6->save();

        $equipo7 = new Equipo();
        
        $equipo7->nombre = 'Athletico Bilbao';
        $equipo7->estadio = 'San Mamés';
        $equipo7->save();

        $equipo8 = new Equipo();
        
        $equipo8->nombre = 'Zaragoza';
        $equipo8->estadio = 'La Romareda';
        $equipo8->save();
    }
}
