<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Tienda;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tienda = new Tienda();

        $tienda->nombre = "Tienda Milan";
        $tienda->numero_cuadros = "10";

        $tienda->save();

        $tienda2 = new Tienda();

        $tienda2->nombre = "Tienda Paris";
        $tienda2->numero_cuadros = "12";

        $tienda2->save();

        $tienda34 = new Tienda();

        $tienda34->nombre = "Tienda Barcelona";
        $tienda34->numero_cuadros = "8";

        $tienda34->save();

        $tienda4 = new Tienda();

        $tienda4->nombre = "Tienda Roma";
        $tienda4->numero_cuadros = "10";

        $tienda4->save();

        $tienda5 = new Tienda();

        $tienda5->nombre = "Tienda Berlin";
        $tienda5->numero_cuadros = "7";

        $tienda5->save();

        $tienda6 = new Tienda();

        $tienda6->nombre = "Tienda Vancouver";
        $tienda6->numero_cuadros = "13";

        $tienda6->save();

        

    }
}
