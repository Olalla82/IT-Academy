<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class catalogController extends Controller
{
    
    public function token()
    {
        return csrf_token();
    }
    public function index()
    {
        return view('catalog.index');
    }

    public function create(Request $request)
    {
        $request->flash();
       
        $request->validate([
            'categoria' => 'required',
            'nombre' => 'required',
            'descript' => 'required'
        ]);
        
        return view('catalog.index');
    }
        public function show($id)
    {
        return view('catalog.show', compact('id'));
    }
   
     public function edit($id)
    { 
       return view('catalog.edit', compact('id'));
    }

    public function edit_update(Request $request)
    {   
        $request->flash();
        
        $request->validate([
            'categoria' => 'required',
            'nombre' => 'required',
            'descript' => 'required'
        ]);

        return view('catalog.edit');
    }
}
