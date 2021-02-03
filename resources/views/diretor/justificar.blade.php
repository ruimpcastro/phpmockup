@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto" class="active">Propostas</a></li>
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

    <h1 id="page-title">Reprovar Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <form action="/diretor/{{$diretor->id}}/projeto/{{$projeto->id}}/reprovar/" method="post">
            @CSRF
            <input name="redirect" type="text" value="/diretor/{{$diretor->id}}/projeto" hidden>
            <input name="utilizadorId" type="text" value="{{$entidade->id}}" hidden>
            <input name="enviadoPor" type="text" value="{{$diretor->nome}}" hidden>
            <p>Projeto: {{$projeto->titulo}}</p><br><br>
            <p>Perfil: {{$projeto->perfilProfissional}}</p><br><br>
            <p>{{$projeto->descricao}}</p><br><br>
            <p>Justificação:</p><br>
            <p>(Escreva uma justificação para a reprovação da proposta de estágio, para que a entidade acolhedora possa corrigir a proposta)</p><br>
            <textarea name="mensagem" cols="50" rows="2" required>A sua proposta de estágio foi reprovada! Segue uma justificação do diretor de estágios:</textarea><br><br>
            <input type="submit" class="accept-button button" value="Submeter">
            <a href="/diretor/{{$diretor->id}}/projeto" class="delete-button button">Cancelar</a>
        </form>
        </div>
    </div>
@endsection
