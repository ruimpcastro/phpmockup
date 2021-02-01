@extends('master')

@section('header-contents')
    <title>Estagiário(a) - Projeto</title>
@endsection

@section('sidemenu-options')
    <li><a href="/estagiario/{{$estagiario->id}}/home">Os Meus Dados</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/projeto" class="active">Propostas de Estágio</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/datas">Datas</a></li>
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
        </div>
    </div>
@endsection
