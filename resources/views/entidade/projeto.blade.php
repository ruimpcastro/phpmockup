@extends('master')

@section('header-contents')
    <title>Entidade - Proposta</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/projeto" class="active">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <p>Projeto: {{$projeto->titulo}}</p><br><br>
            @if($estagiario)
                <p>Estagiário(s): {{$estagiario->nome}} ({{$estagiario->email}})</p><br>
            @else
                <p>Estagiário(s): N/a</p><br>
            @endif
            <p>Orientador: {{$orientador->nome}} ({{$orientador->email}})</p><br>
            @if($supervisor)
                <p>Supervisor: {{$supervisor->nome}} ({{$supervisor->email}})</p><br><br>
            @else
                <p>Supervisor: N/a</p><br><br>
            @endif
            <p>Perfil: {{$projeto->perfilProfissional}}</p><br><br>
            <p>{{$projeto->descricao}}</p><br><br>
            <p>Objetivos: {{$projeto->objetivos}}</p><br><br>
            <p>Data de início: @if($projeto->dataInicio){{$projeto->dataInicio}}@else N/a @endif</p><br>
            <p>Data da 1ª Reunião: @if($projeto->dataInicio){{$projeto->dataInicio}}@else N/a @endif</p><br><br>
            <p>Cronograma:</p><br>
            <table id="propostas-table" class="button-spacing">
                <tr>
                    <th>ID Tarefa</th>
                    <th>Descrição da Tarefa</th>
                    <th>Duração</th>
                </tr>
                @foreach($projeto->cronogramas as $c)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$c->atividade}}</td>
                        <td>{{$c->duracao}}</td>
                    </tr>
                @endforeach
            </table>

            <a href="/entidade/{{$entidade->id}}/projeto/{{$projeto->id}}/editar" class="edit-button button">Alterar Dados</a>
            <a href="#" class="delete-button button">Apagar Proposta</a>
        </div>
    </div>
@endsection
