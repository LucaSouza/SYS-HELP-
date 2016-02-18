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
    ];

    public function cliente(){
      return $this->hasMany(cliente::class, 'id');
    }
}
