
# SECN
SECN - Semana da Consciência Negra. Desenvolvimento de um sistema para cadastro de pessoas e sorteio dos mesmos.

# O projeto contém:

1. *Views* que sendo elas a principal com informações referentes ao evento.
2. *Controllers* e *Models* referentes ao funcionamento e banco de dados.
3. Rotas que condizem com os Gets e Posts.

# Metodologia

1. Foi se utilizado um *Framework* PHP denominado Laravel para criação e funcionamento do sistema.
2. Foi se utilizado uma *lib* denominada *Sweet Alert* para notificações no site.
3. Foi se utilizado *Bootstrap* para estilização do site no geral.
4. Além das demais linguagens, HTML, JavaScript e CSS.

# Implantação

Foi implantando em uma plataforma em nuvem gratuita como um serviço que suporta várias linguagens de programação denominado *Heroku*.

# O *FrontEnd* do site contem:

1. Uma página inicial contendo informações pertinentes ao evento, informações como (textos, tabelas de dias e horários, botão para inscrição, *navbar* contento *scrool* para o conteúdo, parceiros).
2. A página de login para o usuário poder efetuar a entrada no sistema e assim verificar a lista de inscritos.
3. A página de cadastro de usuários para poder que um usuário cadastre mais usuários para controle do sistema.
4. A página de lista de alunos para o usuário poder ter acesso aos nomes e numeros de matrículas do aluno, alem de conter um botão de sorteio que é realizado de forma aleatoria sem repetição.

# Observação

1. Foi se colocado um bloqueio no *controller* para permitir que o aluno não se inscrevesse depois do prazo.
2. No *script* se sorteio necessita alterar o número máximo de inscritos.

# Site online
https://secn.herokuapp.com
