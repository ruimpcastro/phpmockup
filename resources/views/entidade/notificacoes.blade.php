@extends('master')

@section('header-contents')
    <title>Entidade - Notificações</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes" class="active">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/projeto">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Notificações</h1>

    @foreach($notificacoes as $n)
      <div class="new notification">
        <ul>
          <li>ENVIADO POR: <span class="underlined-space">{{$n->enviadoPor}}</span></li>
          <li>{{$n->mensagem}}</li>
          <li>{{$n->data}}</li>
        </ul>
      </div>
    @endforeach
@endsection
