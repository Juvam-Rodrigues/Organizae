<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function show()
    {
        return view("calendarios/calendario1");
    }
}
