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
    <li><a href="/diretor/{{$diretor->id}}/datas">Datas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Criar Entidade</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Nova Entidade</h2>
        <div class="info-section">
            <form action="/diretor/{{$diretor->id}}/entidade/guardar" method="post">
                @CSRF
                <input name="redirect" type="text" value="/diretor/{{$diretor->id}}/entidade" hidden>
                <input name="diretorId" type="number" value={{$diretor->id}} hidden>
                <p>Designação: </p><input name="nome" type="text"><br><br>
                <p>Abreviatura: </p><input name="abreviatura" type="text"><br><br>
                <p>E-Mail: </p><input name="email" type="text"><br><br>
                <p>Username: </p><input name="username" type="text"><br><br>
                <p>Password: </p><input name="password" type="password"><br><br>
                <p>Descrição: </p>
                <textarea name="descricao" cols="50" rows="2"></textarea>
                <br><br>
                <hr>
                <br>
                <p><b>Orientador: </b></p>
                <br>
                <p>Nome: </p><input name="o_nome" type="text"><br><br>
                <p>E-Mail: </p><input name="o_email" type="text"><br><br>
                <p>Telemóvel: </p><input name="o_telemovel" type="text"><br><br>
                <input type="submit" class="accept-button button" value="Registar Entidade">
                <a href="/diretor/{{$diretor->id}}/entidade" class="delete-button button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

@section("script-imports")
@endsection
