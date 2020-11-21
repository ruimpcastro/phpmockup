# Programação Web 2021 - Grupo 13

## O repositório deve conter:
* o código fonte do vosso projeto (não é necessário a pasta vendor);
* um documento PDF com o diagrama de classes da aplicação;
* um documento PDF com as decisões (mais importantes) que tiveram de tomar em termos de desenho;
* um documento com os pontos da API RESTful desenvolvida.


## O projeto
* introdução/edição de propostas por parte das empresas, onde um utilizador autenticado da empresa introduz a informação sobre o projeto de estágio pretendido. Em particular, deve indicar um título, os objetivos, uma breve descrição da proposta, o perfil do candidato e um cronograma inicial das tarefas que se pretendem realizar;

* validação da proposta pela direção do curso, onde o diretor de curso (devidamente autenticado) analisa a proposta e pode marcá-la como aprovada ou rejeitada. No caso de a proposta ser aprovada, ficará disponível para consulta pelos estudantes numa determinada data a especificar (data na qual todas as propostas aprovadas estarão disponíveis para serem escolhidas pelos estudantes); caso a proposta seja rejeitada, o diretor de curso terá à sua disposição um campo de texto para justificar a sua decisão. A proposta poderá ser editada pela empresa e submetida de novo à aprovação pelo diretor de curso;

* visualização de propostas pelos estudantes (autenticados), que lista as propostas aprovadas e mostra os detalhes de cada proposta. Esta opção deve também indicar qual o aluno que irá realizar cada estágio e a informação do orientador e do supervisor, quando estes elementos já tenham sido indicados (ver pontos seguintes);

* escolha das propostas por cada estudante, onde o estudante escolhe as propostas do seu interesse. Para tal, indica para as propostas relevantes a sua ordem de preferência, no máximo de até um número especificado pelo diretor de curso (p. ex., 5 propostas). Esta informação das escolhas individuais não deve ficar disponível para os restantes estudantes;

* atribuição de propostas a estudantes, em que o diretor de curso atribui a cada estudante a sua proposta de estágio, tendo em conta a ordem de preferência, o perfil identificado e outros fatores, como, por exemplo, a média do estudante. Em todo o caso, os critérios de atribuição da proposta são externos ao sistema, e este só permite registar a atribuição de propostas aos candidatos;

* atribuição de supervisores a cada uma das propostas, em que o diretor de curso atribui um dos docentes do DINF como supervisor da proposta. Deve também indicar nesta fase, a data em que o estágio se inicia e a data da primeira reunião com a empresa.


## O que fazer
* proceder ao levantamento de requisitos das funcionalidades descritas brevemente no ponto 1 deste documento;

* proceder ao desenho e à implementação do modelo de domínio que inclua os requisitos identificados no ponto anterior;

* identificar as classes que serão alvo de persistência e programá-las convenientemente usando o padrão Active Record, tal como oferecido na plataforma Laravel;

* criar a base de dados em SQlite, localmente na pasta database, através de migrações, tal como oferecido na plataforma Laravel.

* desenvolver a camada de apresentação via Web, recorrendo à plataforma Laravel, que contenha um menu que permite selecionar as
operações, introduzir a informação necessária à sua execução e mostrar os resultados das execuções das operações. Não têm de desenvolver a interface de utilizador para os casos de uso não especificados neste enunciado, como, por exemplo, Adicionar Utilizadores ou Efetuar a autenticação. Use um método alternativo conveniente que lhe permita identificar o utilizador que está a interagir com o sistema.

* desenhar e desenvolver uma API RESTful que permita aceder às funcionalidades oferecidas pela camada de negócio;

* para dar um aspeto profissional à vossa aplicação podem recorrer ao Bootstrap (https://getbootstrap.com) e torná-lo responsivo ao tamanho de ecrã.


## Como e quando entregar
### Entregas:
* Primeira iteração -> 30 de novembro;
* Segunda iteração -> 14 de dezembro;
* Terceira iteração -> 14 de janeiro.

### Deve conter:
* Código fonte do projeto (sem a pasta vendor);
* Um documento PDF com o diagrama de classes da aplicação;
* Um documento PDF com as decisões (mais importantes) que tomamos em termos de desenho;
* Um documento com os pontos da API RESTful desenvolvida.
