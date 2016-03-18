<?php

namespace App\Http\Controllers;

use Auth;
use Request;
use App\Http\Requests;
use App\Http\Requests\RequestCliente;
use App\Http\Requests\RequestComputador;
use App\Http\Requests\RequestPeriferico;
use App\Http\Requests\RequestSetor;
use App\cliente;
use App\computador;
use App\tecnico;
use App\periferico;
use App\setor;
use App\Http\Controllers\HomeController;
use Hash;
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

    public function registrarComputadorView(Cliente $id)
    {   $setores = $id->setores;
        return view('cliente.cadastrar-computador',compact('id','setores'));
    }

    public function registrarPerifericoView(Cliente $id){
      $setores = $id->setores;
      return view('cliente.cadastrar-periferico',compact('id','setores'));
    }

    public function registrarSetorView(Cliente $id){
      return view('cliente.cadastrar-setor',compact('id'));
    }

    public function registrarPeriferico(RequestPeriferico $request, $id){
      $dados = Request::except('_token');
      $dados['cliente'] = $id;
      $periferico = periferico::create($dados);
      return $this->perfil($id);
    }

    public function registrarSetor(RequestSetor $request, $id){
      $dados = Request::except('_token');
      $dados['cliente'] = $id;
      $setor = setor::create($dados);
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

    public function perfilComputadorView(cliente $id,$id_computador){
        $computador = computador::find($id_computador);
        $setores = $id->setores;
        return view('cliente.perfil-computador',compact('id','computador','setores'));
    }

    public function perfilPerifericoView(cliente $id,$id_periferico){
        $periferico = periferico::find($id_periferico);
        $setores = $id->setores;
        return view('cliente.perfil-periferico',compact('id','periferico','setores'));
    }

    public function perfilSetorView($id,$id_setor){
        $setor = setor::find($id_setor);
        return view('cliente.perfil-setor',compact('id','setor'));
    }

    public function alterarComputador(RequestComputador $request,$id,$id_computador){
        $computador = computador::find($id_computador)->update(Request::except('_token'));
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function alterarPeriferico(RequestPeriferico $request,$id,$id_periferico){
        $periferico = periferico::find($id_periferico)->update(Request::except('_token'));
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function alterarSetor(RequestSetor $request,$id){
        $setor = setor::find($id)->update(Request::except('_token'));
        //$cliente = $setor->cliente;
        return back();
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
        $computador = computador::find($id_computador)->update(['cliente'=>$id_cliente_destino,'setor'=>0]);
        return redirect()->action('ClienteController@perfil', ['id' => $id]);
    }

    public function transferirPeriferico($id,$id_periferico,$id_cliente_destino){
        $periferico = periferico::find($id_periferico)->update(['cliente'=>$id_cliente_destino,'setor'=>0]);
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
        $setores = $valores->setores;
        return view('cliente.perfil',compact('computadores','perifericos','setores','valores'));
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
