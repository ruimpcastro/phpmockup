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
            <p>Cronograma:</p><br>
            <table id="propostas-table" class="button-spacing">
                <tr>
                    <th>ID Tarefa</th>
                    <th>Descrição da Tarefa</th>
                    <th>Duração</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </td>
                    <td>
                        9 dias
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </td>
                    <td>
                        9 dias
                    </td>
                </tr>
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
