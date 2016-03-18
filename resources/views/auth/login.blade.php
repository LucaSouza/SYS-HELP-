@extends('layouts.base-interface')
@section('header')
    <div class="panel-heading">Entrar</div>
@stop
@section('main')
  <form class="form-auth" role="form" method="POST" action="{{ url('/entrar') }}">
      {!! csrf_field() !!}
      <div>
<<<<<<< HEAD
          <label>Email
=======
          <label>E-mail
>>>>>>> ef7ac781d63a0cdb3546c4c4d2246b9497326a01
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong class="error">{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
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
<<<<<<< HEAD
          <a href="{{ url('senha/resetar') }}">Esqueci minha senha!</a>
=======
          <a href="{{ url('/password/reset') }}">Esqueceu a senha, clique aqui!</a>
>>>>>>> ef7ac781d63a0cdb3546c4c4d2246b9497326a01
      </div>
  </form>
@endsection
