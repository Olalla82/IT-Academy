<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuadro;
class CuadroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuadro::factory(60)->create();



        /*$cuadro = new Cuadro();

        $cuadro->nombre = "";
        $cuadro->precio = "";
        $cuadro->fecha_entrada = "";
        $cuadro->autor = "";

        $cuadro->save();*/

        
    }
}
