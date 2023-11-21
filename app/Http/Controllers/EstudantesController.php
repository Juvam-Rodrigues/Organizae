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
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        $confirmacao = $request->confirmacao;
        $foto_perfil = $request->foto_perfil->store('imagens', 'public');

        $novo = Estudante::criarUsuario($nome, $email, $senha, $confirmacao, $foto_perfil);

        if ($novo == null) {
            return redirect("/registro")->with('msg', 'Dados inseridos incorretamente.');
        } else {
            return redirect("/")->with('msg', 'Conta criada com sucesso, logue normalmente.');;
        }
    }
}
