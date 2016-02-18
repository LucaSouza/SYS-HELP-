<?php

namespace App\Http\Controllers;

use Auth;
use Request;
use App\Http\Requests;
use App\Http\Requests\RequestCliente;
use App\tecnico;

class TecnicoController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrarTecnico($user){
      tecnico::create(["user" => $user->id,"id" => $user->id]);
      return true;
    }
}
