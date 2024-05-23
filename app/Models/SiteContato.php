<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome','email','assunto','mensagem'];

    private string $nome;
    private string $email;
    private string $assunto;
    private string $mensagem;

    public function getNome() : string {
        return $this->nome;
    }
    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getEmail() : string {
        return $this->email;
    }
    
    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getAssunto() : string {
        return $this->assunto;
    }
    
    public function setAssunto(string $assunto) {
        $this->assunto = $assunto;
    }
    
    public function getMensagem() : string {
        return $this->mensagem;
    }
    public function setMensagem(string $mensagem) {
        $this->mensagem = $mensagem;
    }
}
