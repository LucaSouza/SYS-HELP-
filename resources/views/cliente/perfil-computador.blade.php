@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">{{$computador->modelo}}</div>
@stop
@section('menu-secundario')
  <menu id="menu-secundario-computador">
    <ul>
      <li><a href="{{action('ClienteController@transferirComputadorView',['id'=>$computador->cliente,'id_computador'=>$computador->id])}}">Trasferir para outro cliente</a></li>
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
  <form class="form-auth" action="{{action('ClienteController@alterarComputador',['id'=>$computador->cliente,'id_computador'=>$computador->id])}}" method="post">
    @include('models/model-form-cadastro-edit-computador')
    <br><button type="submit">Alterar</button>
    <a href="{{action('ClienteController@excluirComputador',['id'=>$computador->cliente,'id_computador'=>$computador->id])}}"><button type="button" name="button">Excluir</button></a>
  </form>
@stop
