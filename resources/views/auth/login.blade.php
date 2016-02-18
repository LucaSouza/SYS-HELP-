@extends('layouts.base-interface')
@section('header')
    <div class="panel-heading">Login</div>
@stop
@section('main')
  <form class="form-auth" role="form" method="POST" action="{{ url('/login') }}">
      {!! csrf_field() !!}
      <div>
          <label>E-Mail
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong class="error">{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
      </div>

      <div>
          <label>Senha
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong class="error">{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </label>
          <input type="password" class="form-control" name="password">
      </div>

      <div class="checkbox">
          <label>
              <input type="checkbox" name="remember">Relembrar
          </label>
      </div>

      <div>
          <button type="submit">Entrar</button>
          <a href="{{ url('/password/reset') }}">Poxa esqueci minha senha !</a>
      </div>
  </form>
@endsection
