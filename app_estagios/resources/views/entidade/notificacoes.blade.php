@extends('master')

@section('header-contents')
    <title>Entidade - Notificações</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes" class="active">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/propostas">Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->designacao}} ({{$entidade->designacao_curta}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Notificações</h1>

      <div class="new notification">
        <ul>
          <li>ENVIADO POR: <span class="underlined-space">[NOME DA ENTIDADE]</span></li>
          <li>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</li>
          <li>2 de novembro, 2020</li>
        </ul>
      </div>

      <div class="notification">
        <ul>
          <li>ENVIADO POR: <span class="underlined-space">[NOME DA ENTIDADE]</span></li>
          <li>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</li>
          <li>30 de outubro, 2020</li>
        </ul>
      </div>
@endsection
