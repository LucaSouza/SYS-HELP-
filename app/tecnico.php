<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tecnico extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
      "id",
      "user",
    ];

    public function cliente(){
      return $this->hasMany(cliente::class, 'tecnico');
    }
}
