@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Cadastrar Cliente</div>
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
  <form class="form-auth" action="{{action('ClienteController@registrarCliente')}}" method="post">
    @include('models/model-form-cadastro-edit-cliente')
    <button type="submit">Cadastrar</button>
  </form>
@stop
