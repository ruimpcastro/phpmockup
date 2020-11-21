@extends('master')

@section('header-contents')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
@endsection

@section('sidemenu-options')
    <li><a href="meusdados.html" class="active">Os Meus Dados</a></li>
    <li><a href="notificacoes.html">Notificações</a></li>
    <li><a href="propostas_estagios.html">Procurar Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="descricao_estagio.html">Descrição do estágio</a></li>
    <li><a href="plano_atividades.html">Plano de Atividades</a></li>
    <li><a href="sumarios.html">Sumários</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->designacao}} ({{$entidade->designacao_curta}})</li>
@endsection

@section('mainpage-contents')
    <p>Coisa</p>
@endsection
