@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Transferir Computador</div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
<<<<<<< HEAD
    <p><span class="nome-user">{{Auth::user()->name}}</span><br> Deseja transferir o computador {{$computador->modelo}} para outro cliente?</p>
=======
    <p><span class="nome-user">{{Auth::user()->name}}</span> tudo bom?<br> Vamos mandar esse {{$computador->modelo}} para outro cliente?</p>
>>>>>>> ef7ac781d63a0cdb3546c4c4d2246b9497326a01
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
    <p class="principal inexistente">Você não tem nenhum cliente.</p>
  @endif
@stop
