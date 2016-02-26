@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Transferir Periferico</div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
    <p><span class="nome-user">{{Auth::user()->name}}</span> bom?<br> Vamos mandar esse {{$periferico->modelo}} para outro cliente?</p>
  </menu>
@stop

@section('main')
  @if(count($clientes)>0)
    <div class="container-pessoas">
      @foreach($clientes as $cliente)
      <a href="{{action('ClienteController@transferirPeriferico',['id'=>$id,'id_periferico'=>$periferico->id,'id_cliente_destino'=>$cliente->id])}}" class="container-pessoa">
        <section>
          <p class="texto-principal">{{$cliente->nome}}</p>
          <p class="texto-secundario">{{$cliente->telefone}}</p>
          <p class="texto-secundario">{{$cliente->cidade}},{{$cliente->uf}}</p>
        </section>
      </a>
      @endforeach
    </div>
  @else
    <p class="principal inexistente">Você não tem nenhum cliente ...</p>
  @endif
@stop
