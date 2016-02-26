@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading"><a href="{{action('ClienteController@perfil',$cliente->id)}}">{{$cliente->nome}}</a></div>
@stop
@section('menu-secundario')
  <menu id="menu-secundario-computador">
    <p>Página dedicada a editar o cliente <br>{{$cliente->nome}}</p>
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
    @include('models/model-form-cadastro-edit-cliente')
    <button type="submit">Editar</button>
  </form>
@stop
