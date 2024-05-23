<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personagens extends Model
{
protected $fillable = ['nome', 'poder', 'sonho', 'imagem'];

private string $nome;
private string $poder;
private string $sonho;

public function getNome() : string {
    return $this->nome;
}
public function setNome(string $nome) {
    $this->nome = $nome;
}

public function getPoder() : string {
    return $this->poder;
}

public function setPoder(string $poder) {
    $this->poder = $poder;
}

public function getsonho() : string {
    return $this->sonho;
}

public function setSonho(string $sonho) {
    $this->sonho = $sonho;
}


}
