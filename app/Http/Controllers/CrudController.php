<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotele;
use Validator;
use Throwable;

class CrudController extends Controller
{
    public function index(){
        
        try{

            $hoteles = Hotele::all();
           
            return view('crud.index', compact('hoteles'));

        } catch (Throwable $e) {
            
            return response()->view('error');
        }
        
    }


    public function create(){
        
        try{

            return view('crud.create');

        }catch(Throwable $e) {
            
            return response()->view('error');
        }
        
    }


    public function store(Request $request){
        
            $request->validate([
                'nombre_hotel' => 'required',
                'numero_habit' => 'required',
                'numero_noches' => 'required',
                'fecha_llegada' => 'required|date',
                'fecha_salida' => 'required|date',
                'numero_personas' => 'required'
            ]);


        try {
            
        
            $hotel = new Hotele();

            $hotel->nombre_hotel = $request->nombre_hotel;
            $hotel->numero_habit = $request->numero_habit;
            $hotel->numero_noches = $request->numero_noches;
            $hotel->fecha_llegada = $request->fecha_llegada;
            $hotel->fecha_salida = $request->fecha_salida;
            $hotel->numero_personas = $request->numero_personas;

            $hotel->save();

            return redirect()->route('reservas.show', $hotel);

        } catch (Throwable $e) {

            return response()->view('error');
        }
    
    }

    public function show(Hotele $hotel){
        
        try{

            return view('crud.show', compact('hotel'));
        
        }catch (Throwable $e){

            return response()->view('error');
        }
       
        
    }


    public function edit(Hotele $hotel){
        
        try{
            return view('crud.edit', compact('hotel'));
       
        }catch (Throwable $e){

            return response()->view('error');
        }
       
    }

    public function update(Request $request, Hotele $hotel){


            $request->validate([
                'nombre_hotel' => 'required',
                'numero_habit' => 'required',
                'numero_noches' => 'required',
                'fecha_llegada' => 'required|date',
                'fecha_salida' => 'required|date',
                'numero_personas' => 'required'
            ]);

        try{

            $hotel->nombre_hotel = $request->nombre_hotel;
            $hotel->numero_habit = $request->numero_habit;
            $hotel->numero_noches = $request->numero_noches;
            $hotel->fecha_llegada = $request->fecha_llegada;
            $hotel->fecha_salida = $request->fecha_salida;
            $hotel->numero_personas = $request->numero_personas;

            $hotel->save();

            return redirect()->route('reservas.show', $hotel);

        }catch (Throwable $e){

            return response()->view('error');
        }
    }


    public function destroy(Hotele $hotel){

        try{

            $hotel->delete();

            return redirect()->route('reservas.index');

        }catch (Throwable $e){

            return response()->view('error');

        }
        
    }

    
}
