@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">{{$setor->nome}}</div>
@stop
@section('menu-secundario')
  {{--<menu id="menu-secundario-computador">
    <ul>
      <li><a href="">Trasferir para outro cliente</a></li>
    </ul>
  </menu>--}}
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
  <form class="form-auth" action="{{action('ClienteController@alterarSetor',$setor->id)}}" method="post">
    @include('models/model-form-cadastro-edit-setor')
    <br><button type="submit">Alterar</button>
  </form>
@stop
