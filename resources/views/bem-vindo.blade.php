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
		<header id="header">
			<img class="logo-header" src="{{{ asset('/imagens/logo.png')}}}" alt="" />
			<div id="container-buttons">
				@if(Auth::guest())
					<a id="logar" href="{{ url('/entrar')}}">Entrar</a>
					<a id="cadastrar" href="{{ url('/registrar') }}">Registrar</a>
				@else
					<li>
							<span>Olá</span>{{ Auth::user()->name }}
							<li><a href="{{ url('/logout') }}">Logout</a></li>
					</li>
				@endif
			</div>
		</header>
		<main id="main">
			<div class="hero">
					<div class="hero-inner">
				    <img class="hero-logo" src="{{{ asset('/imagens/logo.png')}}}" alt="imagem" />
						<div class="hero-copy">
							<h1>SYS HELP</h1>
							<p>Um sistema Web desenvolvido para todos os técnicos em informática do mundo!</p>
						</div>
					</div>
			</div>
			<div class="items">
				  <a href="javascript:void(0)" class="grid-item">
				    <span aria-hidden="true" class="li_shop"></span>
						<h1>Clientes</h1>
				    <p>Atualmente não temos nenhum cliente, mas se Deus quiser teremos. ;)</p>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-big grid-item-image">
				    <span aria-hidden="true" class="li_study"></span>
				    <h1>Contribuidores</h1>
				    <p>Atualmente em nosso projeto temos 6 contribuidores.</p>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-big">
				    <span aria-hidden="true" class="li_note"></span>
				    <h1>Documentação</h1>
<<<<<<< HEAD
				    <p>Toda documentação está no Github, da uma olhada lá!</p>
=======
				    <p>Toda documentação esta no Github, da uma olhada lá!</p>
>>>>>>> ef7ac781d63a0cdb3546c4c4d2246b9497326a01
				  </a>
				  <a href="javascript:void(0)" class="grid-item">
				    <span aria-hidden="true" class="li_settings"></span>
				    <h1>Projetos</h1>
				    <p>Esse é o nosso primeiro projeto. ;p</p>
				  </a>
			</div>
		</main>
			<footer class="footer-2" role="contentinfo">
					<div class="footer-secondary-links">
						<ul>
							<li><a href="javascript:void(0)">Sobre a gente</a></li>
							<li><a href="javascript:void(0)">Contatos</a></li>
							<li><a href="javascript:void(0)">Contribua com nosso projeto</a></li>
						</ul>

						<ul>
							<li><a href="javascript:void(0)">Termos e condições</a></li>
							<li><a href="javascript:void(0)">Politica de Privacidade</a></li>
						</ul>

						<ul class="footer-social">
							<li><a href="javascript:void(0)">
								<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
								</a></li>
							<li><a href="javascript:void(0)">
								<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
							</a></li>
							<li><a href="javascript:void(0)">
								<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
							</a></li>
						</ul>
					</div>
			</footer>
	</body>
</html>
