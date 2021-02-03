@extends('master')

@section('header-contents')
    <title>Diretor - Entidade</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade" class="active">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/supervisor">Supervisor</a></li>
    <li><a href="/diretor/{{$diretor->id}}/confs">Configurações</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Criar Estagiário</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Novo Estagiário</h2>
        <div class="info-section">
            <form action="/diretor/{{$diretor->id}}/estagiario/guardar" method="post">
                @CSRF
                <input name="redirect" type="text" value="/diretor/{{$diretor->id}}/estagiario" hidden>
                <input name="diretorId" type="number" value={{$diretor->id}} hidden>
                <p>Nome: </p><input name="nome" type="text" required><br><br>
                <p>Username: </p><input name="username" type="text" required><br><br>
                <p>Password: </p><input name="password" type="password" required><br><br>
                <p>Telemovel: </p><input name="telemovel" type="text" required><br><br>
                <p>E-Mail: </p><input name="email" type="text" required><br><br>
                <input type="submit" class="accept-button button" value="Registar Entidade">
                <a href="/diretor/{{$diretor->id}}/entidade" class="delete-button button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

@section("script-imports")
@endsection
