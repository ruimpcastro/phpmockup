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

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <p>Projeto: {{$projeto->titulo}}</p><br><br>
            @if($projeto->aprovado)
            <p>Aprovado: Sim</p><br><br>
            @else
            <p>Aprovado: Não</p><br><br>
            @endif
            <p>Estagiário(s): [TBD]</p><br>
            <p>Orientador: {{$orientador->nome}} ({{$orientador->email}})</p><br>
            <p>Supervisor: [TBD]</p><br><br>
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

            @if(!$projeto->aprovado)
            <form action="/diretor/{{$diretor->id}}/projeto/{{$projeto->id}}/aprovar/" method="post">
                @CSRF
                @method('PUT')
                <input name="redirect" type="text" value="/diretor/{{$diretor->id}}/projeto" hidden>
                <input name="entidadeId" type="text" value="{{$entidade->id}}" hidden>
                <input name="projetoId" type="text" value="{{$projeto->id}}" hidden>
                <input name="aprovado" type="text" value="1" hidden>
                <input name="perfilProfissional" type="text" value="{{$projeto->perfilProfissional}}" hidden>
                <input name="descricao" type="text" value="{{$projeto->descricao}}" hidden>
                <input name="titulo" type="text" value="{{$projeto->titulo}}" hidden>
                <input type="submit" class="accept-button button" value="Aprovar">
                <a href="/diretor/{{$diretor->id}}/projeto/{{$projeto->id}}/justificarReprovacao/" class="delete-button button">Reprovar</a>
            </form>
            @endif
        </div>
    </div>
@endsection
