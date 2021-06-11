<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GameController extends Controller
{
   public function index(Request $request, Player $player){

    
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $sumatoria = $dado1 + $dado2;

        if($sumatoria == 7){
            $resultado = true;
        }else {
            $resultado = false;
        }
        
        $player = Player::find('1');
        $game = Game::create(['dado1' => $dado1,
                            'dado2' => $dado2,
                            'player_id' => $player->id
                            //Auth::user()->id
        ]);
      
       return view('partida', compact(['game', 'resultado', 'sumatoria', 'player']));
    
    }

    
    public function show(Player $player, Game $game){
        $player = Player::all();
        $games = Game::all();
        return view('show', compact( 'games', 'player'));
    }

   public function destroy(Player $player, Game $game){
        $game->delete();
    
    }

  
}
