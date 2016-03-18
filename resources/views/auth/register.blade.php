@extends('layouts.base-interface')

@section('header')
  <div class="panel-heading">Registrar</div>
@stop
@section('main')
  <form class="form-auth" role="form" method="POST" action="{{ url('/registrar') }}">
                        {!! csrf_field() !!}

      <div>
          <label>Usuario
            @if ($errors->has('name'))
                <span>
                    <strong class="error">{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </label>
            <div>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
      </div>

      <div>
          <label>Email
            @if ($errors->has('email'))
                <span>
                    <strong class="error">{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </label>

          <div>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">
          </div>
      </div>

      <div>
          <label>Senha
            @if ($errors->has('password'))
                <span>
                    <strong class="error">{{ $errors->first('password') }}</strong>
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
                <span>
                    <strong class="error">{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </label>

          <div>
              <input type="password" class="form-control" name="password_confirmation">
          </div>
      </div>

      <div>
          <button type="submit">Registrar</button>
      </div>
  </form>

@endsection
