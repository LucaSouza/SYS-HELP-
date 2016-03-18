@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading"><a href="{{action('ClienteController@perfil',$cliente->id)}}">{{$cliente->nome}}</a></div>
@stop
@section('menu-secundario')
  <menu id="menu-secundario">
    <li><a href="{{action('ClienteController@registrarComputadorView',$cliente->id)}}">Cadastrar Computador</a></li>
    <li><a href="{{action('ClienteController@registrarPerifericoView',$cliente->id)}}">Cadastrar Periférico</a></li>
    <li><a href="{{action('ClienteController@registrarSetorView',$cliente->id)}}">Cadastrar Setor</a></li>
    <li><a href="{{action('ClienteController@editarClienteView',$cliente->id)}}">Editar Cliente</a></li>
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
  <form class="form-auth" action="{{action('ClienteController@editarCliente',$cliente->id)}}" method="post">
    <span id="tema-form">Editar Cliente</span>
    @include('models/model-form-cadastro-edit-cliente')
    <button type="submit">Editar</button>
  </form>
@stop
