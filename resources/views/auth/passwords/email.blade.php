@extends('layouts.base-interface')

@section('header')
    <div class="panel-heading">Alterar Senha</div>
@stop
@section('main')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form class="form-auth" role="form" method="POST" action="{{ url('/password/email') }}">
    {!! csrf_field() !!}

    <div>
        <label>E-Mail
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </label>
        <div>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        <div>
    </div>

    <div>
        <button type="submit">
            Alterar Senha
        </button>
    </div>
</form>
@endsection
