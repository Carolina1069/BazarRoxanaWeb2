<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensajeController extends Controller
{
    public function store()
{
    request()->validate([

        'contenido'=>'required'
    ]);
}


}
