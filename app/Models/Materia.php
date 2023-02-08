<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    
    use HasFactory;
    protected $fillable = ['nome_da_materia']; //Criação de array de atributos.
    
    // MATÉRIAS

    public function editarMateria($nome){
        $this->nome_da_materia = $nome;
        $this->save(); //Salva no banco de dados.

    }
    public function excluirMateria(){
        $this->estudante()->detach(); //Remove a materia do estudante.
        $this->delete();

    }
    // ANOTAÇÕES
    public function criarAnotacoes(){

    }
    // METAS
    public function criarMetas(){

    }

    //RELACIONAMENTOS:

    public function metas(){
        return $this->hasMany(Meta::class, 'metas');
    }
    public function anotacoes(){
        return $this->hasMany(Anotacao::class, 'anotacoes');
    }

    public function estudante(){
        return $this->belongsTo(Estudante::class, 'estudantes');
    }

}
