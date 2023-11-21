<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Anotacao extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'corpo']; //Criação de array de atributos.
    
    public function editarAnotacao($titulo, $corpo){
        $this->titulo = $titulo;
        $this->corpo = $corpo;
        $this->save(); //Salva no banco de dados.
    }
    public function excluirAnotacao(){
        $this->materia()->detach(); //remove a materia de materia.
        $this->save();
    }
    
    public function ocultarAnotacao(){

    }
    public function compartilharAnotacaos(){

    }

    //RELACIONAMENTOS:

    public function materia(){
        return $this->belongsTo(Materia::class, 'materias');
    }
}
