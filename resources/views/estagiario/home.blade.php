@extends('master')

@section('header-contents')
    <title>Estagiario(a) - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/estagiario/{{$estagiario->id}}/home" class="active">Os Meus Dados</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/projeto">Propostas de Estágio</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/prefs">Propostas Selecionadas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$estagiario->nome}} ({{$estagiario->email}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Os Meus Dados</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Estagiario(a)</h2>
        <div class="info-section">
            <ul class="button-spacing">
                <li>Nome: <span class="underlined-space">{{$estagiario->nome}}</span></li>
                <li>E-Mail: <span class="underlined-space">{{$estagiario->email}}</span></li>
                <li>Telemóvel: <span class="underlined-space">{{$estagiario->telemovel}}</span></li>
            </ul>
            <a href="meusdados_form.blade.php" class="button edit-button">Alterar Dados</a>
        </div>
    </div>
@endsection
