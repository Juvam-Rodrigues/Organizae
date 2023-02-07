<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function materia(){
        return view("materias/materias");
    }
}
