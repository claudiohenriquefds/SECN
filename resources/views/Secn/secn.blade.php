<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>II Semana da Consciência Negra</title>

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
        <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top shadow-sm">
                <div class="container">
                    <a class="navbar-brand text-warning" style="font-family: 'Squada One', cursive;" href="{{ url('/') }}">
                       II Semana da Conciência Negra
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav text-uppercase">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link js-scroll-trigger" href="{{route('inicio')}}">INICIO</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('PAINEL') }}</a>
                                </li>
                                <!-- @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif -->
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                        </a>
                                        <a class="dropdown-item" href="{{route('register')}}">
                                            {{ __('Cadastrar Novo Usuário') }}
                                        </a>
                                        <a class="dropdown-item" href="{{route('alunos')}}">
                                            {{ __('Ver alunos') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container pt-5">
                @yield('content')
            </div>
		</main>
		<footer>
			<div class="container mt-5">
					<hr class="divider">
					<div class="container text-center">Desenvolvido por Cláudio Henrique Ferreira da Silva, Donizeti da Silva Neves, Uilson José da Cruz Junior.</div>

                    <div class="text-center">
                        <a href="https://www.instagram.com/stdio.code/">
                          <img class="img-fluid w-25" src="img/Studiocodes.png"></a>
                        </a>
                    </div>
                    <hr class="divider">

			</div>
		</footer>
	</body>
</html>