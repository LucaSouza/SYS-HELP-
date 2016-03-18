<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bem-vindo ao SYS-HELP</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{{ asset('/css/app.css') }}}" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{{ asset('/css/FONT_HTML_CSS/style.css') }}}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <a href="{{url('/principal')}}" class="logo-header" ><img src="{{{ asset('/imagens/logo.png')}}}" alt=""/></a>
      @yield('header')
      @if(!Auth::guest())
      <div class="container-user">
        <span id="header-tecnico-nome" class="nome-user">{{ Auth::user()->name }}</span>
        <menu id="container-menu-user">
          <ul>
            <li class="item-menu"><a href="{{action('ClienteController@registrarClienteView')}}">Cadastrar Cliente</a></li>
            <li class="item-menu"><a href="{{ url('/logout') }}">Logout</a></li>
          </ul>
        </menu>
      </div>
      @endif
    </header>
    <main>
      @yield('menu-secundario')
      @yield('main')
    </main>
  </body>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/masked.js') }}"></script>
  <script type="text/javascript" src="{{url('http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js')}}"></script>
  <script type="text/javascript" src="{{{ asset('js/js.js') }}}"></script>
</html>
