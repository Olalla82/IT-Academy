<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partido;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partido = new Partido();

        $partido->estadio = 'Camp Nou';
        $partido->equipo_local = 'FC. Barcelona';
        $partido->equipo_visitante = 'Sevilla';
        $partido->fecha = '2021-06-11';
        $partido->save();

        $partido2 = new Partido();

        $partido2->estadio = 'Santiago Bernabeu';
        $partido2->equipo_local = 'Real Madrid';
        $partido2->equipo_visitante = 'Betis';
        $partido2->fecha = '2021-06-15';
        $partido2->save();

        $partido3 = new Partido();

        $partido3->estadio = 'RCDE Estadium';
        $partido3->equipo_local = 'Esañol';
        $partido3->equipo_visitante = 'Athletico de Bilbao';
        $partido3->fecha = '2021-06-18';
        $partido3->save();

        $partido4 = new Partido();

        $partido4->estadio = 'Riazor';
        $partido4->equipo_local = 'Deportivo';
        $partido4->equipo_visitante = 'Zaragoza';
        $partido4->fecha = '2021-06-20';
        $partido4->save();
    }
}
