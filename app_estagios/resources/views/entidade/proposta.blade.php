@extends('master')

@section('header-contents')
    <title>Entidade - Proposta</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/propostas" class="active">Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->designacao}} ({{$entidade->designacao_curta}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">[NOME DA ENTIDADE ACOLHEDORA]</h2>
        <div class="info-section">
            <p>Projeto: [NOME DO PROJETO]</p><br><br>
            <p>Estagiário(s): [NOME DO ESTAGIARIO]</p><br>
            <p>Orientador: [NOME DO ORIENTADOR]</p><br>
            <p>Supervisor: [NOME DO SUPERVISOR]</p><br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.</p><br>
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
            <table id="propostas-table">
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

            <a href="#" class="accept-button button">Aceitar Proposta</a>
        </div>
    </div>
@endsection
