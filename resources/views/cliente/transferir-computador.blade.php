@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Transferir Computador</div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
    <p>Olá,{{Auth::user()->name}}  tudo bom?<br> Vamos mandar esse {{$computador->modelo}} para outro cliente?</p>
  </menu>
@stop

@section('main')
  @if(count($clientes)>0)
    <div class="container-pessoas">
      @foreach($clientes as $cliente)
      <a href="{{action('ClienteController@transferirComputador',['id'=>$id,'id_computador'=>$computador->id,'id_cliente_destino'=>$cliente->id])}}" class="container-pessoa">
        <section>
          <p class="texto-principal">{{$cliente->nome}}</p>
          <p class="texto-secundario">{{$cliente->telefone}}</p>
          <p class="texto-secundario">{{$cliente->cidade}},{{$cliente->uf}}</p>
        </section>
      </a>
      @endforeach
    </div>
  @else
    <p>Você não tem nenhum cliente ...</p>
  @endif
@stop
