<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computador extends Model
{
    protected $fillable = [
      "modelo",
      "so",
      "observacao" ,
      "ip",
      "email",
      "nome",
      "grupo",
      "programas",
      "cliente",
      "setor",
    ];

    public function cliente(){
      return $this->hasMany(cliente::class, 'id');
    }
    public function setor(){
      return $this->hasMany(setor::class, 'id');
    }
}
