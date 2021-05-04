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
        dd ('holaaaa');
        return view('catalog.index');
    }
    public function show($id)
    {
        return view('catalog.show', compact('id'));
    }
    public function create()
    {
        return view('catalog.create');
    }
    public function edit($id)
    {
        return view('catalog.edit', compact('id'));
    }
}
