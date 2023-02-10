<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Estudante;



class MateriasController extends Controller
{
    public function materia(){
        return view("materias/materias");
    }

    public function create(Request $request){
        $nome = $request->nome;
        $nova = session()->get('estudante')->criarMateria($nome);
        return redirect("/materias");
    }
    public function destroy($id){
        Materia::findOrFail($id)->delete();
        return redirect("/materias");
    }
    public function edit(Request $request){
        $nome = $request->nome_novo;        
        
        Materia::findOrFail($request->id)->update(['nome_da_materia' => $nome]);
        
       
        return redirect("/materias");
    }
    
    
}
