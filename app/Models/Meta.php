<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $fillable = ['nome_da_meta']; 

    // METAS
    public function editarMeta(){

    }
    
    public function excluirMeta(){
        $this->materia()->detach(); //remove a meta de materia.
        $this->delete();

    }
    // DATAS
    public function inserirDataInicial(){

    }
    public function inserirDataFinal(){

    }
    // HORÁRIOS
    public function editarHorario(){

    }
    public function excluirHorario(){

    }
    
    // LEMBRETES
    
    public function excluirLembrete(){
        $this->materia()->detach(); //remove o lembrete atrelado a meta da lista de materia.
        $this->delete();
    }
    public function editarLembrete(){
    
    }
    
    public function marcarConcluido(){
    
    }

    //RELACIONAMENTOS:

    public function materia(){
        return $this->belongsTo(Materia::class, 'materias');
    }
}
