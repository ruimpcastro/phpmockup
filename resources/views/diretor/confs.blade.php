@extends('master')

@section('header-contents')
    <title>Diretor(a) - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/supervisor">Supervisor</a></li>
    <li><a href="/diretor/{{$diretor->id}}/confs" class="active">Configurações</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Datas</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Datas</h2>
        <div class="info-section">
            <form action="/diretor/{{$diretor->id}}/guardar" method="post">
                <input type="text" name="redirect" value="/diretor/{{$diretor->id}}/confs" hidden>
                <input type="number" name="diretorId" value="{{$diretor->id}}" hidden>
                <input type="text" name="nome" value="{{$diretor->nome}}" hidden>
                <input type="text" name="email" value="{{$diretor->email}}" hidden>
                <input type="text" name="telemovel" value="{{$diretor->telemovel}}" hidden>
                <input type="text" name="username" value="{{$diretor->username}}" hidden>
                <input type="text" name="password" value="{{$diretor->password}}" hidden>
                <input type="text" name="maxPrefs" value="{{$diretor->maxPrefs}}" hidden>
                <input type="date" name="dataPubliPropostas" value="{{$diretor->dataPubliPropostas}}" hidden>
                @CSRF
                @method('PUT')
                <ul class="button-spacing">
                    <li>Publicação das Propostas de Estágio:</li>
                    <li><input name="dataPubliPropostas" type="date" value="{{$diretor->dataPubliPropostas}}" required></li>
                </ul>
                <input type="submit" class="add-button button" value="Guardar Data">
            </form>
            <br>
            <br>
            <br>
            <form action="/diretor/{{$diretor->id}}/guardar" method="post">
                @CSRF
                @method('PUT')
                <input type="text" name="redirect" value="/diretor/{{$diretor->id}}/confs" hidden>
                <input type="number" name="diretorId" value="{{$diretor->id}}" hidden>
                <input type="text" name="nome" value="{{$diretor->nome}}" hidden>
                <input type="text" name="email" value="{{$diretor->email}}" hidden>
                <input type="text" name="telemovel" value="{{$diretor->telemovel}}" hidden>
                <input type="text" name="username" value="{{$diretor->username}}" hidden>
                <input type="text" name="password" value="{{$diretor->password}}" hidden>
                <input type="date" name="dataPubliPropostas" value="{{$diretor->dataPubliPropostas}}" hidden>
                <p>Nº Máximo de Propostas Selecionadas por Estagiário:</p>
                <br>
                <input type="number" name="maxPrefs" value="{{$diretor->maxPrefs}}" required>
                <br>
                <br>
                <input type="submit" class="button add-button" value="Guardar Valor">
            </form>
        </div>
    </div>
@endsection
