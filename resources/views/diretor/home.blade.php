@extends('master')

@section('header-contents')
    <title>Diretor(a) - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home" class="active">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Os Meus Dados</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Diretor(a)</h2>
        <div class="info-section">
            <ul class="button-spacing">
                <li>Nome: <span class="underlined-space">{{$diretor->nome}}</span></li>
                <li>E-Mail: <span class="underlined-space">{{$diretor->email}}</span></li>
                <li>Telemóvel: <span class="underlined-space">{{$diretor->telemovel}}</span></li>
            </ul>
            <a href="meusdados_form.blade.php" class="button edit-button">Alterar Dados</a>
        </div>
    </div>
@endsection
