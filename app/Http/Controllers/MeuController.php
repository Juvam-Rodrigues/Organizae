<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function apagarConta($id){
        Estudante::findOrFail($id)->delete();
        //estudante = Estudante.find(id);
        //estudante->excluir()

        return redirect('/')->with('msg', 'Conta excluída com sucesso.');
    }
    public function login(){
        return view('login');
    }
    public function materia(){
        return view('materia');
    }

    public function teste(){
        return view('materia');
    }
}












