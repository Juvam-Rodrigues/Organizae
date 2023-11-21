<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meta;

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

    public function criarAnotacaos($titulo, $corpo){
        $anotacao = new Anotacao(['titulo' => $titulo , 'corpo' => $corpo]);
        $this->anotacaos()->save($anotacao);
    }
    // METAS
    public function criarMetas($nome){
        $meta = new Meta(['nome_da_meta' => $nome]);
        $this->metas()->save($meta);
    }

    //RELACIONAMENTOS:

    public function metas(){

        return $this->hasMany(Meta::class);
    }
    public function anotacaos(){
        return $this->hasMany(Anotacao::class);
    }

    public function estudante(){
        return $this->belongsTo(Estudante::class);
    }

}
