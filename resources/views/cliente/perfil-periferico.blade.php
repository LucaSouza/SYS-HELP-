@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">{{$periferico->modelo}}</div>
@stop
@section('menu-secundario')
  <menu id="menu-secundario-computador">
    <ul>
      <li><a href="{{action('ClienteController@transferirPerifericoView',['id'=>$periferico->cliente,'id_periferico'=>$periferico->id])}}">Trasferir para outro cliente</a></li>
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
  <form class="form-auth" action="{{action('ClienteController@alterarPeriferico',['id'=>$periferico->cliente,'id_periferico'=>$periferico->id])}}" method="post">
    @include('models/model-form-cadastro-edit-periferico')
    <button type="submit">Alterar</button>
    <a href="{{action('ClienteController@excluirPeriferico',['id'=>$periferico->cliente,'id_periferico'=>$periferico->id])}}"><button type="button" name="button">Excluir</button></a>
  </form>
@stop
