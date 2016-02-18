@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">{{$valores->nome}}</div>
@stop


@section('menu-secundario')
  <menu id="menu-secundario">
    <ul>
      <li><a href="{{action('ClienteController@registrarComputadorView',$valores->id)}}">Cadastrar Computador</a></li>
      <li><a href="{{action('ClienteController@registrarPerifericoView',$valores->id)}}">Cadastrar Periférico</a></li>
      <li><a href="{{action('ClienteController@editarClienteView',$valores->id)}}">Editar Cliente</a></li>
    </ul>
  </menu>
@stop

@section('main')
  @if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li class="error">
              {{ $error }}
            </li>
        @endforeach
    </ul>
  @endif
  <div class="container-equipamentos">
      <div class="computadores">
        <p class="texto-principal tema">Computadores</p>
        @if(count($computadores)>0)
          @foreach($computadores as $computador)
            <a href="{{action('ClienteController@perfilComputadorView',['id'=>$valores->id,'id_computador'=>$computador->id])}}" class="computador">
              <section>
                <div class="modelo">
                  <p class="texto-principal">{{$computador->modelo}}</p>
                </div>
                <div class="so">
                  <p class="texto-secundario">{{$computador->so}}</p>
                </div>
              </section>
            </a>
          @endforeach
        @else
          <p class="principal">Nenhuma computador cadastrado</p>
        @endif
      </div>

      <div class="perifericos">
        <p class="texto-principal tema">Perifericos</p>
        @if(count($perifericos)>0)
          @foreach($perifericos as $periferico)
            <a href="{{action('ClienteController@perfilPerifericoView',['id'=>$valores->id,'id_periferico'=>$periferico->id])}}" class="computador">
              <section>
                <div class="modelo">
                  <p class="texto-principal">{{$periferico->modelo}}</p>
                </div>
                <div class="interface">
                  <p class="texto-secundario">{{$periferico->interface}}</p>
                </div>
              </section>
            </a>
          @endforeach
        @else
          <p>Nenhuma periferico cadastrado</p>
        @endif
      </div>
  </div>
@stop
