<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\tecnico;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = tecnico::find(Auth::user()->id);
        $clientes = $clientes->cliente;
        foreach ($clientes as $cliente) {
          $cliente['dispositivos'] = $cliente->computador->count()+$cliente->periferico->count();
        }
        return view('home',compact('clientes'));
    }
}
