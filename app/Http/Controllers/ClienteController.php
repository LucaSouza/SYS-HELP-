<?php

namespace App\Http\Controllers;

use Auth;
use Request;
use App\Http\Requests;
use App\Http\Requests\RequestCliente;
use App\Http\Requests\RequestComputador;
use App\Http\Requests\RequestPeriferico;
use App\cliente;
use App\computador;
use App\tecnico;
use App\periferico;
use App\Http\Controllers\HomeController;

class ClienteController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrarClienteView()
    {
        return view('cliente.cadastrar-cliente');
    }

    public function registrarComputadorView($id)
    {
        return view('cliente.cadastrar-computador',compact('id'));
    }

    public function registrarPerifericoView($id){
      return view('cliente.cadastrar-periferico',compact('id'));
    }

    public function registrarPeriferico(RequestPeriferico $request, $id){
      $dados = Request::except('_token');
      $dados['cliente'] = $id;
      $periferico = periferico::create($dados);
      return $this->perfil($id);
    }

    public function transferirComputadorView($id,$id_computador){
      $cliente = computador::find($id_computador)->cliente;
      $clientes = cliente::where('id','<>',$cliente)->where('tecnico',Auth::user()->id)->get();
      $computador = computador::find($id_computador);
      return view('cliente.transferir-computador',compact('clientes','computador','id'));
    }

    public function transferirPerifericoView($id,$id_periferico){
      $cliente = periferico::find($id_periferico)->cliente;
      $clientes = cliente::where('id','<>',$cliente)->where('tecnico',Auth::user()->id)->get();
      $periferico = periferico::find($id_periferico);
      return view('cliente.transferir-periferico',compact('clientes','periferico','id'));
    }

    public function perfilComputadorView($id,$id_computador){
        $computador = computador::find($id_computador);
        return view('cliente.perfil-computador',compact('id','computador'));
    }

    public function perfilPerifericoView($id,$id_periferico){
        $periferico = periferico::find($id_periferico);
        return view('cliente.perfil-periferico',compact('id','periferico'));
    }

    public function alterarComputador(RequestComputador $request,$id,$id_computador){
        $computador = computador::find($id_computador)->update(Request::except('_token'));
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function alterarPeriferico(RequestPeriferico $request,$id,$id_periferico){
        $periferico = periferico::find($id_periferico)->update(Request::except('_token'));
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function excluirComputador($id,$id_computador){
        $computador = computador::find($id_computador)->delete();
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function excluirPeriferico($id,$id_periferico){
        $periferico = periferico::find($id_periferico)->delete();
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function transferirComputador($id,$id_computador,$id_cliente_destino){
        $computador = computador::find($id_computador)->update(['cliente'=>$id_cliente_destino]);
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function transferirPeriferico($id,$id_periferico,$id_cliente_destino){
        $periferico = periferico::find($id_periferico)->update(['cliente'=>$id_cliente_destino]);
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function registrarComputador(RequestComputador $request,$id){
      $dados = Request::except('_token');
      $dados['cliente'] = $id;
      $computador = computador::create($dados);
      return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function registrarCliente(RequestCliente $request){
      $dados = Request::all();
      $dados['tecnico'] = Auth::user()->id;
      $clientes = cliente::create($dados);
      $clientes = tecnico::find(Auth::user()->id);
      $clientes = $clientes->cliente;
      foreach ($clientes as $cliente) {
        $cliente['dispositivos'] = $cliente->computador->count()+$cliente->periferico->count();
      }
      return view('home',compact('clientes'));
    }

    public function perfil($id)
    {   $valores = cliente::find($id);
        $computadores = $valores->computador;
        $perifericos = $valores->periferico;
        return view('cliente.perfil',compact('computadores','perifericos','valores'));
    }

    public function editarClienteView($id){
        $cliente = cliente::find($id);
        return view('cliente.editar',compact('cliente'));
    }

    public function editarCliente(RequestCliente $request, $id){
      $cliente = cliente::find($id)->update(Request::except('_token'));
      return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }
}
