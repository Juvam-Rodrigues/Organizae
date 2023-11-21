<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Anotacao;


class AnotacoesController extends Controller
{
    public function create(Request $request){
        $id_materia = $request->materia_id;
        $materia = Materia::find($id_materia);
        if ($materia != null)
        {
            $materia->criarAnotacaos($request->titulo, $request->corpo);
            return redirect('/materias/acessar/'.$id_materia);
        }
        return redirect('/materias');
    }
    public function edit(Request $request){
        $titulo = $request->titulo_novo;
        $corpo = $request->corpo_novo;
        $id_materia = $request->materia_id;

        Anotacao::findOrFail($request->id)->update(['titulo' => $titulo, 'corpo' => $corpo]);
       
        return redirect('/materias/acessar/'.$id_materia);
    }
    
    public function destroy($id, Request $request){
        $id_materia = $request->materia_id;
        Anotacao::findOrFail($id)->delete();
        return redirect('/materias/acessar/'.$id_materia);
    }

}
