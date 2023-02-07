<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudante;

class SessoesController extends Controller
{
    public function new() {
        return view("sessoes/new");
    }

    public function create(Request $r) {
        $email = $r->email;
        $senha = $r->senha;
        Estudante::logar($email, $senha);
        if(true){
            return redirect("/materias");
        }
        return redirect("/login");

    }
}
