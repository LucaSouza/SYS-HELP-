<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periferico extends Model
{
    protected $fillable = [
      "modelo",
      "descricao",
      "interface" ,
      "observacao",
      "cliente",
      "setor"
    ];

    public function cliente(){
      return $this->hasMany(cliente::class, 'id');
    }
}
