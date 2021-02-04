@extends('master')

@section('header-contents')
    <title>Estagiário(a) - Projeto</title>
@endsection

@section('sidemenu-options')
    <li><a href="/estagiario/{{$estagiario->id}}/home">Os Meus Dados</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/projeto" class="active">Propostas de Estágio</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/prefs">Propostas Selecionadas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$estagiario->nome}} ({{$estagiario->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <p>Projeto: {{$projeto->titulo}}</p><br><br>
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
            @if($estagiario->preferencias->count() < $estagiario->diretor->maxPrefs)
                <form action="/estagiario/{{$estagiario->id}}/projeto/{{$projeto->id}}/adicionar" method="post">
                    @CSRF
                    <input name="redirect" type="text" value="/estagiario/{{$estagiario->id}}/projeto" hidden>
                    <input name="estagiarioId" type="number" value="{{$estagiario->id}}" hidden>
                    <input name="projetoId" type="number" value="{{$projeto->id}}" hidden>
                    <input type="submit" class="accept-button button" value="Adicionar à lista de preferências">
                </form>
            @else
            <p>Não podes adicionar mais propostas às tuas preferências!</p>
            @endif
        </div>
    </div>
@endsection
