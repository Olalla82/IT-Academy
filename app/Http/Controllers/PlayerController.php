<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;

class PlayerController extends Controller
{
   public function index(){
    return view('index');
   }


   public function create(){
       return view('create');
   }


   public function store(Request $request){
        $player = new Player();
        $player->nombre = $request->nombre;
        $player->save();

        
       return view('juego', compact('player'));
   }


    public function show(){
      
       $player = Player::all();
       return view('player', compact( 'games', 'player'));
    }

 
  /* public function edit(Game $game, Player $player){

       return view('edit', compact('player', 'game'));
   }


  
   public function update(Request $request, Player $player){
        
        $player->nombre = $request->nombre;
    
        $player->save();

        return redirect()->route('player.show', $player);
    }


    
   public function delete(Player $player){
       $player->delete();

   }*/
}
