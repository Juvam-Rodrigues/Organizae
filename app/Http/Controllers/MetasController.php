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
    public function edit(Request $request){
        $nome_da_meta = $request->nome_novo;
        $id_materia = $request->materia_id;

        Meta::findOrFail($request->id)->update(['nome_da_meta' => $nome_da_meta]);
       
        return redirect('/materias/acessar/'.$id_materia);
    }

    public function destroy($id, Request $request){
        $id_materia = $request->materia_id;
        Meta::findOrFail($id)->delete();
        return redirect('/materias/acessar/'.$id_materia);
    }
}
