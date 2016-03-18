@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading"><a href="{{action('ClienteController@perfil',$id->id)}}">{{$id->nome}}</a></div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
    <ul>
      <li><a href="{{action('ClienteController@registrarComputadorView',$id)}}">Cadastrar Computador</a></li>
      <li><a href="{{action('ClienteController@registrarPerifericoView',$id)}}">Cadastrar Periférico</a></li>
      <li><a href="{{action('ClienteController@registrarSetorView',$id)}}">Cadastrar Setor</a></li>
      <li><a href="{{action('ClienteController@editarClienteView',$id)}}">Editar Cliente</a></li>
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
  <form class="form-auth" action="{{action('ClienteController@registrarSetor',$id)}}" method="post">
    <span id="tema-form">Cadastrar Setor</span>
    @include('models/model-form-cadastro-edit-setor')
    <button type="submit">Cadastrar</button>
  </form>
@stop
