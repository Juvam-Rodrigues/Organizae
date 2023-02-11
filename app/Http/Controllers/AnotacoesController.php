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
}
