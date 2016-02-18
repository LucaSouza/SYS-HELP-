@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Cadastrar Periferico</div>
@stop

@section('menu-secundario')
  <menu id="menu-secundario">
    <ul>
      <li><a href="{{action('ClienteController@registrarComputadorView',$id)}}">Cadastrar Computador</a></li>
      <li><a href="{{action('ClienteController@registrarPerifericoView',$id)}}">Cadastrar Periférico</a></li>
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
  <form class="form-auth" action="{{action('ClienteController@registrarPeriferico',$id)}}" method="post">
    @include('models/model-form-cadastro-edit-periferico')
    <button type="submit">Cadastrar</button>
  </form>
@stop
