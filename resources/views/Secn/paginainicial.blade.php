<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>II Semana da Consciência Negra</title>

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="/js/scroll.js"></script>
        

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">

    </head>
    <body>
      <style type="text/css">
        a[href="#top"]{
          position:fixed;
          top: 88%;
          right:40px;
          display:none;
      }
      a[href="#top"]:hover{
          text-decoration:none;
      }
      </style>
      <script type="text/javascript">
        $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('a[href="#top"]').fadeIn();
            } else {
                $('a[href="#top"]').fadeOut();
            }
        });

        $('a[href="#top"]').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
            });
        });
      </script>
      <a href="#top" class="text-dark display-4">↑</a>
        <header>
            <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark shadow-sm">
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
                                <a class="nav-link js-scroll-trigger" href="Javascript: scrollprogramacao()">Programação</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link js-scroll-trigger" href="Javascript: scrollsobre()">Sobre</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link js-scroll-trigger" href="{{route('inscricaoevento')}}">INSCREVA-SE</a>
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
        <div id="inicio">
            <div class="container mt-5 pt-5 text-center">
                <p style="font-family: 'Squada One', cursive;" class="display-4">II Semana da Consciência Negra</p>
                  <div class="container w-50">
                <hr class="divider bg-warning pb-1">
              </div>
                <p style="font-family: 'Squada One', cursive;" class="h5">Campus Guanambi</p>

                <p style="font-family: 'Squada One', cursive;" class="h5">20/11/2019 e 23/11/2019</p>
                <a class="btn btn-outline-dark p-2" href="{{route('inscricaoevento')}}">Inscreva-se</a>
            </div>

          <div class="container-fluid text-center bg-white mt-5">
            <p class="display-4 text-uppercase lead" style="font-family: 'Squada One', cursive;">Sobre o evento</p>
            <div class="container w-50">
              <div class="container w-50">
                <hr class="divider bg-warning pb-1">
              </div>
            </div>
          </div>
          <div class="container d-flex justify-content-center">
          <div class="">
            <div><img class="img-fluid" style="height: 350px;" src="img/logo.png"></div>
          </div>
        </div>
          <div class="container d-flex justify-content-center bg-white">


            <div class="narrow text-center mt-2">

            <div class="mt-4"></div>
            <div class="col" id="sobre">
            <h4 style="font-family: 'Squada One', cursive;">Sobre o evento</h4>
            <hr class="divider bg-warning w-25 mt-0">
            <p class="text-justify">O dia 20 de novembro foi instituído dia de Zumbi dos Palmares e da Consciência Negra por ser a data de falecimento deste líder que simbolizava a luta e resistência do povo negro contra o regime escravocrata. A princípio esta data foi incluída no calendário escolar nacional, no ano de 2003, e só depois, em 2011, a presidenta Dilma Rousseff sancionou a Lei 12.519, convertendo-a no Dia da Consciência Negra.
Sendo assim, o Núcleo de Estudos Afro-brasileiros e Indígenas/ campus Guanambi, programa institucional que visa fortalecer as ações afirmativas nas áreas de ensino, pesquisa e extensão; busca, através da II Semana da Consciência Negra, promover ações de combate a atos discriminatórios, além de disseminar os princípios de igualdade e respeito para com a população afrodescendente brasileira.

            </p>
            <!-- <h4 style="font-family: 'Squada One', cursive;">Objetivo</h4>
            <hr class="divider bg-warning w-25 mt-0">
            <p>A proposta da II Semana da Consciência Negra é ampliar o campo de conhecimento dos alunados
                através da
            </p> -->
            </div>
            <div class="col">
            <h4 style="font-family: 'Squada One', cursive;">Sobre o tema</h4>
            <hr class="divider bg-warning w-25 mt-0">
            <p class="text-justify">O tema da II Semana da Consciência Negra - 2019: “A África que existe em nós: História, cultura e identidade”  tem como objetivo apresentar as nossas raízes africanas na história, nas artes, na literatura, na culinária, nos processos produtivos e de cultivo. Além disso, pretende promover reflexão e debate sobre temas relevantes para a população negra como: cotas raciais, racismo institucional e movimentos de resistências. Tais discussões buscam estimular a aprendizagem e o empoderamento dos nossos alunos, para que possamos formar uma sociedade cada vez mais justa e igualitária.
            </p>
            <!-- <h4 style="font-family: 'Squada One', cursive;">Objetivo</h4>
            <hr class="divider bg-warning w-25 mt-0">
            <p>A proposta da II Semana da Consciência Negra é ampliar o campo de conhecimento dos alunados
                através da
            </p> -->
            </div>
            </div>

            </div>
          </div>

          <div id="programacao" class="jumbotron">
            <div class="container-fluid text-center">
              <p class="display-4 text-uppercase lead" style="font-family: 'Squada One', cursive;">Programação</p>
              <div class="container w-50">
                <div class="container w-50">
                  <hr class="divider bg-warning w-75 pb-1">
                </div>
              </div>
            </div>


    <!--Activitys Section-->
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active btn btn-outline-dark" id="home-tab" data-toggle="tab" href="#quarta" role="tab" aria-controls="home" aria-selected="true">Quarta 20/11/2019</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark" id="profile-tab" data-toggle="tab" href="#sabado" role="tab" aria-controls="profile" aria-selected="false">Sábado 23/11/2019</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="quarta" role="tabpanel" aria-labelledby="quarta">
            <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">13H - Abertura</p>
          <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
          <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">14H - Apresentações Artísticas</p>
          <div class="container w-50">
                <hr class="divider bg-warning pb-1">
              </div>
            <table class="table table-striped text-center">
              <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">15H - Salas Temáticas</p>
              <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
              <thead>
                <tr class="bg-warning">
                  <th scope="col">Tema</th>
                  <th scope="col">Sala</th>
                  <th scope="col">Turma</th>
                  <th scope="col">Docente</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>O racismo no mundo virtual</td>
                  <td>SALA 3 PAV II</td>
                  <td>ADS - 3DS</td>
                  <td>Daniele Trindade</td>
                </tr>
                <tr>
                  <td>Comidas afrobrasileiras: sabores e sentidos</td>
                  <td>SALA 2 PAV II</td>
                  <td>AGROINDÚSTRIA - 3AT</td>
                  <td>Daniele Trindade</td>
                </tr>
                <tr>
                  <td>A mão negra no solo brasileiro</td>
                  <td>SALA 1 PAV II</td>
                  <td>AGRONOMIA - 2AE</td>
                  <td>Daniele Trindade</td>
                </tr>
                <tr>
                  <td>Música negra na América Latina</td>
                  <td></td>
                  <td>3 ANO - AB</td>
                  <td>Samylle Souza e Debora Mendel</td>
                </tr>
                <tr>
                  <td>Música negra na América Latina</td>
                  <td></td>
                  <td>3 ANO - BA</td>
                  <td>Samylle Souza e Debora Mendel</td>
                </tr>
                <tr>
                  <td>Música negra na América Latina</td>
                  <td></td>
                  <td>3 ANO - CA</td>
                  <td>Samylle Souza e Debora Mendel</td>
                </tr>
                <tr>
                  <td>Música negra na América Latina</td>
                  <td></td>
                  <td>3 ANO - AII</td>
                  <td>Samylle Souza e Debora Mendel</td>
                </tr>
                <tr>
                  <td>Racismo ambiental na cidade</td>
                  <td></td>
                  <td>1 ANO - AII</td>
                  <td>Pricila Oliveira</td>
                </tr>
                <tr>
                  <td>Racismo ambiental na campo</td>
                  <td></td>
                  <td>1 ANO - BII</td>
                  <td>Pricila Oliveira</td>
                </tr>
                <tr>
                  <td>O que é racismo ambiental?</td>
                  <td></td>
                  <td>1 ANO - AA</td>
                  <td>Pricila Oliveira</td>
                </tr>
                <tr>
                  <td>Tragédias ambientais: populações afetadas</td>
                  <td></td>
                  <td>1 ANO - BA</td>
                  <td>Pricila Oliveira</td>
                </tr>
                <tr>
                  <td>Racismo ambiental e consciência negra: quilimbos de Guanambi</td>
                  <td></td>
                  <td>1 ANO - BII</td>
                  <td>Pricila Oliveira</td>
                </tr>
                <tr>
                  <td>Personalidades negras</td>
                  <td></td>
                  <td>3BC - SUBSEQUENTE</td>
                  <td>Aglair Alves e Miryan Serpa</td>
                </tr>
                <tr>
                  <td>Mitos e lendas africanos</td>
                  <td></td>
                  <td>2 ANO</td>
                  <td>VERÔNICA OLIVEIRA E ROSANGELA FIGUEIREDO</td>
                </tr>
                <tr>
                  <td>Reinos africanos</td>
                  <td></td>
                  <td>2 ANO</td>
                  <td>VERÔNICA OLIVEIRA E ROSANGELA FIGUEIREDO</td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="sabado" role="tabpanel" aria-labelledby="sabado">
            <table class="table table-striped text-center">
                <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">Stand - Beleza Negra</p>
                <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
              <thead>
                <tr class="bg-warning">
                  <th scope="col">Colaboradoras</th>
                  <th scope="col">Stand: Beleza negra</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Luzia Almeida Couto</td>
                  <td>dreadlocks dreadsloucos </td>
                </tr>
                <tr>
                  <td>Eliana  de Jesus Cruz</td>
                  <td>Se é para tombar, tombei</td>
                </tr>
                <tr>
                  <td>Gleiça Raiane Pereira Santos</td>
                  <td>Jogue suas tranças de mel</td>
                </tr>

              </tbody>
            </table>
              <table class="table table-striped text-center">
                <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">8H - Mesa redonda</p>
                <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
              <thead>
                <tr class="bg-warning">
                  <th scope="col">Participantes</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Local</th>
                  <th scope="col">Descrição</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sebastião Carvalho</td>
                  <td></td>
                  <td>UNEB - Caetité</td>
                  <td>Professor da UNEB – campus XII
Especialista em Educação Especial e Gestão Cultural
Doutorando em Educação</td>
                </tr>
                <tr>
                  <td>Débora Simões </td>
                  <td></td>
                  <td>IF Baiano - campus GBI</td>
                  <td>Doutoranda pelo Programa de Pós-Graduação em Antropologia Social da Universidade Federal do Rio de Janeiro pertencente ao Museu Nacional (PPGAS/UFRJ/MN). É integrante do Grupo de Pesquisa de Antropologia da Devoção (Gpad) e do Laboratório de Antropologia do Lúdico e do Sagrado (Ludens) vinculados ao PPGAS. É mestre (2014) em História Social, pela Universidade do Estado do Rio de Janeiro (UERJ/FFP). Licenciou-se em História pela Universidade do Estado do Rio de Janeiro, na Faculdade de Formação de Professores (UERJ/FFP, 2011). Durante a graduação foi bolsista de extensão do Projeto de Pesquisa: História e Memória do Município de São Gonçalo na pesquisa sobre identidade e cultura negra.</td>
                </tr>
                <tr>
                  <td>Jeferson Bispo dos Santos</td>
                  <td></td>
                  <td>Quilombo Educacional Ilha - Vera Cruz, Ba</td>
                  <td>Graduado em Licenciatura no curso de Geografia pela UFBA; Professor do Quilombo Educacional Ilha, localizado no Município de Vera Cruz- Bahia desde 2012; Atividade voluntária como professor no Instituto Cultural Steve Biko, no Ensino Médio. Salvador Bahia desde agosto de 2013.</td>
                </tr>

              </tbody>
            </table>
            <table class="table table-striped text-center">
                <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">8H - Roda de conversa</p>
                <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
              <thead>
                <tr class="bg-warning">
                  <th scope="col">Participantes</th>
                  <th scope="col">Tema</th>
                  <th scope="col">Local</th>
                  <th scope="col">Descrição</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ravi Cordeiro de Oliveira</td>
                  <td>Relatos de experiência</td>
                  <td></td>
                  <td>
Mestre de capoeira da Associação Guanambiense Ginga Bahia.
Trabalha como voluntário em projetos de inclusão social, com 
o intuito de promover a prática da capoeira.</td>
                </tr>
                <tr>
                  <td>Willian Novais</td>
                  <td>Relatos de experiência</td>
                  <td>Movimento organizado Hip-Hop Guanambi</td>
                  <td>Membro do grupo Movimento Organizado Hip Hop Guanambi.</td>
                </tr>
                <tr>
                  <td>Letícia Araújo</td>
                  <td>Relatos de experiência</td>
                  <td>UNEB - Caetité </td>
                  <td>Graduada em Licenciatura em Educação Física pela Universidade do Estado da Bahia - DEDC XII. Atua no projeto ARTE E EU desenvolvendo aulas de Dança Contemporânea, Dança Afro-brasileira e Danças Urbanas.</td>
                </tr>

              </tbody>
            </table>
            <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">10H - Apresentações artisticas</p>
              <div class="container w-25">
                <hr class="divider bg-warning pb-1">
              </div>
              <p class="text-center" style="font-family: 'Squada One', cursive;font-size: 30px;">10:30H - Sorteio de brindes e encerramento</p>
        <div class="container w-50">
                <hr class="divider bg-warning pb-1">
              </div>
          </div>
        </div>
    </div>

		    </main>
		<footer>
      <div class="container text-center">
        <h4 style="font-family: 'Squada One', cursive;">Realização:</h4>
        <hr class="divider">
        <img class="img-fluid"  style="height:100px;" src="img/ifbaiano.png">
        <img class="img-fluid" style="height:200px;" src="img/logo-neabi.jpeg">
      </div>
			<div class="container mt-5">
					<hr class="divider">
					<div class="container text-center" style="font-family: 'Squada One', cursive;">Desenvolvido por Cláudio Henrique Ferreira da Silva, Donizeti da Silva Neves, Uilson José da Cruz Junior.</div>
                    <div class="text-center">
                        <a href="https://www.instagram.com/stdio.code/">
                          <img class="img-fluid"  style="height:200px;" src="img/Studiocodes.png"></a>
                        </a>
                    </div>
					<hr class="divider">
			</div>
      @include('sweetalert::alert')
		</footer>
	</body>
</html>