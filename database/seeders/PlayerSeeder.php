<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player = new Player();
        $player->id = 1;
        $player->nombre = 'Oscar';
        $player->save();

        $player2 = new Player();
        $player->id = 2;
        $player2->nombre = 'Marcos';
        $player2->save();

        $player3 = new Player();
        $player->id = 3;
        $player3->nombre = 'Albert';
        $player3->save();

        $player4 = new Player();
        $player->id = 4;
        $player4->nombre = 'Laura';
        $player4->save();

        $player5 = new Player();
        $player->id = 5;
        $player5->nombre = 'Bernat';
        $player5->save();
    }
}
