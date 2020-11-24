@extends('master')

@section('header-contents')
    <title>Entidade - Proposta</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidades/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidades/{{$entidade->id}}/notificacoes">Notificações</a></li>
    <li><a href="/entidades/{{$entidade->id}}/propostas" class="active">Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->designacao}} ({{$entidade->designacao_curta}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->designacao}}</h2>
        <div class="info-section">
            <p>Projeto: {{$proposta->titulo_projeto}}</p><br><br>
            <p>Estagiário(s): [TBD]</p><br>
            <p>Orientador: [TBD]</p><br>
            <p>Supervisor: {{$proposta->supervisor}}</p><br><br>
            <p>{{$proposta->descricao_projeto}}</p><br>
            <p>Requisitos:</p>
            <ul class="button-spacing">
                <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
            </ul>

            <p>Cronograma:</p>
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

            <a href="#" class="edit-button button">Alterar Dados</a>
            <a href="#" class="delete-button button">Apagar Proposta</a>
        </div>
    </div>
@endsection
