<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Meta;


class MetasController extends Controller
{
    public function create(Request $request){
        $id_materia = $request->materia_id;
        $materia = Materia::find($id_materia);
        if ($materia != null)
        {
            $materia->criarMetas($request->nome_da_meta);
            return redirect('/materias/acessar/'.$id_materia);
        }
        return redirect('/materias');
    }
}
