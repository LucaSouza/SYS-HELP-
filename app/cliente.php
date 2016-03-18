<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
      "nome",
      "identificacao",
      "telefone",
      "celular",
      "rua",
      "numero",
      "complemento",
      "cep",
      "cidade",
      "uf",
      "tecnico"
    ];

    public function computador(){
      return $this->hasMany(computador::class, 'cliente');
    }

    public function periferico(){
      return $this->hasMany(periferico::class, 'cliente');
    }

    public function setores(){
      return $this->hasMany(setor::class, 'cliente');
    }

}
