<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotele;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotel = new Hotele();

        $hotel->nombre_hotel = 'Hotel Magestic';
        $hotel->numero_habit = '1';
        $hotel->numero_noches = '4';
        $hotel->fecha_llegada = '2021-07-02';
        $hotel->fecha_salida = '2021-07-06';
        $hotel->numero_personas = '2';

        $hotel->save();

        $hotel2 = new Hotele();

        $hotel2->nombre_hotel = 'Hotel Playa Luna';
        $hotel2->numero_habit = '2';
        $hotel2->numero_noches = '7';
        $hotel2->fecha_llegada = '2021-08-1';
        $hotel2->fecha_salida = '2021-08-08';
        $hotel2->numero_personas = '4';

        $hotel2->save();

        $hotel3 = new Hotele();

        $hotel3->nombre_hotel = 'Hotel Palace';
        $hotel3->numero_habit = '1';
        $hotel3->numero_noches = '2';
        $hotel3->fecha_llegada = '2021-06-25';
        $hotel3->fecha_salida = '2021-06-27';
        $hotel3->numero_personas = '1';

        $hotel3->save();

        $hotel4 = new Hotele();

        $hotel4->nombre_hotel = 'Hotel Club Habanna';
        $hotel4->numero_habit = '4';
        $hotel4->numero_noches = '10';
        $hotel4->fecha_llegada = '2021-08-02';
        $hotel4->fecha_salida = '2021-08-12';
        $hotel4->numero_personas = '8';

        $hotel4->save();

        $hotel5 = new Hotele();

        $hotel5->nombre_hotel = 'Hotel Prestige Luxe';
        $hotel5->numero_habit = '1';
        $hotel5->numero_noches = '4';
        $hotel5->fecha_llegada = '2021-07-10';
        $hotel5->fecha_salida = '2021-07-14';
        $hotel5->numero_personas = '2';

        $hotel5->save();

        $hotel6 = new Hotele();

        $hotel6->nombre_hotel = 'Hotel Mar i Cel';
        $hotel6->numero_habit = '2';
        $hotel6->numero_noches = '8';
        $hotel6->fecha_llegada = '2021-07-20';
        $hotel6->fecha_salida = '2021-07-28';
        $hotel6->numero_personas = '4';

        $hotel6->save();

        $hotel7 = new Hotele();

        $hotel7->nombre_hotel = 'Hotel Los hawaianos';
        $hotel7->numero_habit = '1';
        $hotel7->numero_noches = '6';
        $hotel7->fecha_llegada = '2021-10-18';
        $hotel7->fecha_salida = '2021-10-24';
        $hotel7->numero_personas = '2';

        $hotel7->save();

        $hotel8 = new Hotele();

        $hotel8->nombre_hotel = 'Hotel Las 1000 Maravillas';
        $hotel8->numero_habit = '1';
        $hotel8->numero_noches = '4';
        $hotel8->fecha_llegada = '2021-07-02';
        $hotel8->fecha_salida = '2021-07-06';
        $hotel8->numero_personas = '2';

        $hotel8->save();

        $hotel9 = new Hotele();

        $hotel9->nombre_hotel = 'Hotel Hilton';
        $hotel9->numero_habit = '1';
        $hotel9->numero_noches = '14';
        $hotel9->fecha_llegada = '2021-06-01';
        $hotel9->fecha_salida = '2021-06-14';
        $hotel9->numero_personas = '2';

        $hotel9->save();

    }
}
