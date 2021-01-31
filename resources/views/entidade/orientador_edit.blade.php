@extends('master')

@section('header-contents')
    <title>Entidade - Orientador</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidades/{{$entidade->id}}/home/">Os Meus Dados</a></li>
    <li><a href="/entidades/{{$entidade->id}}/notificacoes/">Notificações</a></li>
    <li><a href="/entidades/{{$entidade->id}}/projetos/" class="active">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Orientador</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <form action="/entidade/{{$entidade->id}}/orientador/alterar" method="post">
                @CSRF
                @method('PUT')
                <input name="redirect" type="text" value="/entidade/{{$entidade->id}}/projeto" hidden>
                <input name="entidadeId" type="number" value={{$entidade->id}} hidden>
                <p>Nome: </p><input name="nome" type="text"><br><br>
                <p>E-Mail: </p><input name="email" type="text"><br><br>
                <p>Telemovel: </p><input name="telemovel" type="text"><br><br>
                <input type="submit" class="accept-button button" value="Atualizar Orientador">
                <a href="/entidades/{{$entidade->id}}/orientador" class="delete-button button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

@section("script-imports")

@endsection
