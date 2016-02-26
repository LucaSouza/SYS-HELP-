@extends('layouts.base-interface')
@section('header')
    <div class="panel-heading">Reset Password</div>
@stop
@section('main')

  <form class="form-auth" role="form" method="POST" action="{{ url('/password/reset') }}">
      {!! csrf_field() !!}

      <div>
          <label>E-mail
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="error">{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </label>

          <div>
              <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
          </div>
      </div>

      <div>
          <label>Senha
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </label>

          <div>
              <input type="password" class="form-control" name="password">
          </div>
      </div>

      <div>
          <label>Confirmar Senha
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </label>
          <div>
              <input type="password" class="form-control" name="password_confirmation">
          </div>
      </div>

      <div>
          <button type="submit">
              Alterar Senha
          </button>
      </div>
  </form>
@endsection
