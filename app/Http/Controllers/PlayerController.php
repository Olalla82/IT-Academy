<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;

class PlayerController extends Controller
{

    public function index(){
        
        $player = Player::all();
        $games = Game::all();
       
       return view('index', compact('player', 'games'));
    }

    public function create(){
        return view('create');
    }

   public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
        ]);

            $player = new Player();
            $player->nombre = $request->nombre;
            $player->save();

        return redirect()->route('player.show', $player);

       
    }
    public function show(Player $player){

        return view('juego', compact('player'));
    }

   public function edit(Player $player){
            
            return view('edit', compact('player'));
    }

    Public function update(Request $request, Player $player){

        $request->validate([
            'nombre' => 'required',
        ]);

        $player->update($request->all());

        return redirect()->route('player.show', $player);
    }
   
} 
