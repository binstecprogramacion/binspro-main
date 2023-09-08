<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index()
    {
        return view('cuenta.index');
    }

    public function show($id)
    {
        return view('cuenta.show', ['id' => $id]);
    }
}
