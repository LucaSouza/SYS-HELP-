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
      <span class="logo-header"><a href="{{url('/home')}}"><span aria-hidden="true" class="li_cup">&nbsp;</span></a></span>
      @yield('header')
      @if(!Auth::guest())
      <div class="container-user">
        <span id="header-tecnico-nome" class="nome-user">{{ Auth::user()->name }}</span>
        <menu id="container-menu-user">
          <ul>
<<<<<<< HEAD
            <li class="item-menu">Olá, {{ Auth::user()->name }}  benvindo!</li>
=======
            <li class="item-menu nome-user">Olá,{{ Auth::user()->name }} bom?</li>
            <li class="item-menu"><a href="{{action('ClienteController@registrarClienteView')}}">Cadastrar Cliente</a></li>
>>>>>>> e6c3653b5cc60e9f668a14bb5935ca01584f8c1d
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
  <script type="text/javascript" src="{{{ asset('js/jquery-1.11.1.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('js/js.js') }}}"></script>
</html>
