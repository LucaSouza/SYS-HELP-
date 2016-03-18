<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setor extends Model
{
  protected $fillable = [
    "nome",
    "descricao",
    "cliente"
  ];

  public function cliente(){
    return $this->hasMany(cliente::class, 'id');
  }
}
