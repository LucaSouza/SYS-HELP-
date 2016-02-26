@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Transferir Computador</div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
<<<<<<< HEAD
    <p>Olá,{{Auth::user()->name}}  tudo bom?<br> Vamos mandar esse {{$computador->modelo}} para outro cliente?</p>
=======
    <p><span class="nome-user">{{Auth::user()->name}}</span>bom ?<br> Vamos mandar esse {{$computador->modelo}} para outro cliente ?</p>
>>>>>>> e6c3653b5cc60e9f668a14bb5935ca01584f8c1d
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
    <p class="principal inexistente">Você não tem nenhum cliente ...</p>
  @endif
@stop
