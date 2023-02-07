<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudante;

class EstudantesController extends Controller
{
    public function index() {
        return view("estudantes/index");
    }

    public function show($id) {
        return view("estudantes/show");
    }

    public function new() {
        return view("estudantes/new");
    }

    public function create(Request $request) {
        $nome = $request->name;
        $email = $request->email;
        $senha = $request->password;
        $confirmacao = $request->confirm_password;

        $novo = Estudante::criarUsuario($nome, $email, $senha, $confirmacao);

        if ($novo == null) {
            return redirect("/estudantes");
        } else {
            return redirect("/estudantes/" + $novo->id);
        }
    }
}
