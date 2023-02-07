<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'senha', 'foto_perfil'];
    protected $hidden = ['senha'];
    
    // USUÁRIO
    
    public static function criarUsuario($nome, $email, $senha, $repetirSenha) {
        $foto_perfil = "";

        if ($senha == $repetirSenha){
            $e = new Estudante([
                'nome' => $nome, 'senha' => $senha, 'email' => $email, 'foto_perfil' => $foto_perfil
            ]);

            $e->save();
            return $e;
        }

        return null;
    }

    public static function logar($email, $senha){
        $estudante = Estudante::where('email', $email)->first();

        if($estudante != null && Hash::check($senha, $estudante->senha)){ //Check verifica
            session()->put('estudante', $estudante); //Variável de sessão para que ela não seja morta ao apagar a página, para que a aplicação não se esqueça.
            return true;
        }
        return false;
        
    }
    public function deslogar(){
        session()->forget('estudante');
    }

    // DADOS

    public function editarDados($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

        $this->save(); //Salva no banco de dados.

    }
    //public function excluirConta(){
    //    this>delete
    //}

    // FOTO DE PERFIL
    
    public function adicionarFotoDePerfil(){

    }
    public function editarFotoDePerfil(){

    }

    // MATÉRIAS
    
    public function criarMaterias(){
    
    }

    //RELACIONAMENTOS

    public function materias(){
        return $this->hasMany(Materia::class, 'materias');
    }
}
