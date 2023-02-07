<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    public function show() {
        return view("estudantes/show");
    }
}
