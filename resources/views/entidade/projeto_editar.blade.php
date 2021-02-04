@extends('master')

@section('header-contents')
    <title>Entidade - Projeto</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home/">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes/">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/projeto/" class="active">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Editar Proposta</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <form action="/projeto/{{$projeto->id}}/editar" method="post">
                @CSRF
                @method('PUT')
                <input name="redirect" type="text" value="/entidade/{{$entidade->id}}/projeto" hidden>
                <input name="entidadeId" type="number" value={{$entidade->id}} hidden>
                <input name="projetoId" type="number" value={{$projeto->id}} hidden>
                <input name="aprovado" type="number" value=0 hidden>
                <p>Projeto: </p><input name="titulo" type="text" value="{{$projeto->titulo}}" required><br><br>
                <p>Supervisor: </p><input name="supervisor" type="text" value="PLACEHOLDER" required><br><br>
                <p>Perfil Profissional: </p>
                <textarea name="perfilProfissional" cols="50" rows="2" required>{{$projeto->perfilProfissional}}</textarea>
                <br><br>
                <p>Descrição: </p>
                <textarea name="descricao" cols="50" rows="10" required>{{$projeto->descricao}}</textarea>
                <br><br>
                <p>Objetivos: </p>
                <textarea name="objetivos" cols="50" rows="10" required>{{$projeto->objetivos}}</textarea>
                <br><br>
                <input type="submit" class="accept-button button" value="Submeter Proposta">
                <a href="/entidade/{{$entidade->id}}/projeto" class="delete-button button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

@section("script-imports")
    <script type="text/javascript" src="{{ asset('js/addTableRow.js') }}"></script>
@endsection
