@extends('layouts.base-interface')

@section('header')
  <h1 class="panel-heading">{{ Auth::user()->name }}</h1>
@endsection

@section('menu-secundario')
  <menu id="menu-secundario-tecnico">
    <ul>
      <li><a href="{{action('ClienteController@registrarClienteView')}}">Cadastrar Cliente</a></li>
    </ul>
  </menu>
@stop

@section('main')
  @if(count($clientes)>0)
    <div class="container-pessoas">
        @foreach($clientes as $cliente)
          <a href="{{action('ClienteController@perfil',$cliente->id)}}" class="container-pessoa">
              <section>
                 <div id="nome" class="texto-principal">{{$cliente->nome}}</div>
                 <div id="telefone" class="texto-secundario">{{$cliente->telefone}}</div>
                 <div id="local" class="texto-secundario">{{$cliente->cidade}}, {{$cliente->uf}}</div>
                 <div id="num-dispositivos" class="info-cli">dispositivos ({{$cliente->dispositivos}})</div>
              </section>
          </a>
        @endforeach
    </div>
  @else
<<<<<<< HEAD
    <p class="principa inexistente">Você não possui cliente.</p>
=======
    <p class="principa inexistente">Você não possui nenhum  no momento!</p>
>>>>>>> ef7ac781d63a0cdb3546c4c4d2246b9497326a01
  @endif
@stop
