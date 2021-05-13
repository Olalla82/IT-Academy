<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editar;



class EditarController extends Controller
{
    //
    public function index()
    {
        $editars = \App\Models\Editar::all();
        return view('permisos.editar', compact('editars'));
    }
    public function destroy($id)
    {
        Editar::findOrFail($id)->delete();

        return redirect()->back();
    }
}
