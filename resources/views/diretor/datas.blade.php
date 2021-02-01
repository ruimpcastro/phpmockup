@extends('master')

@section('header-contents')
    <title>Diretor(a) - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/datas" class="active">Datas</a></li>
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
            <ul class="button-spacing">
                <li>Publicação das Propostas de Estágio:</li>
                <li>{{$diretor->dataPubliPropostas}}</li>
                <li><input name="dataPublicacao" type="date" value="{{$diretor->dataPubliPropostas}}"></li>
            </ul>
            <a href="meusdados_form.blade.php" class="button edit-button">Alterar Dados</a>
        </div>
    </div>
@endsection
