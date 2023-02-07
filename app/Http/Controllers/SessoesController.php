<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessoesController extends Controller
{
    public function new() {
        return view("sessoes/new");
    }
}
