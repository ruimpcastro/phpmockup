@extends('master')

@section('header-contents')
    <title>Entidade - Notificações</title>
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

    <h1 id="page-title">Propostas da Estágio</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Entidade Acolhedora</th>
                <th>Perfil Requirido</th>
                <th>Projeto</th>
                <th>Opções</th>
            </tr>
            <tr>
                <td>[NOME DA ENTIDADE]</td>
                <td>Web Developer</td>
                <td>Manutenção do Sistema de Gestão de Recursos Humanos</td>
                <td>
                    <a href="/entidade/{{$entidade->id}}/proposta" class="details-button button">Detalhes</a>
                </td>
            </tr>
            <tr>
                <td>[NOME DA ENTIDADE]</td>
                <td>Web Developer</td>
                <td>Manutenção do Sistema de Gestão de Recursos Humanos</td>
                <td>
                    <a href="/entidade/{{$entidade->id}}/proposta" class="details-button button">Detalhes</a>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/entidade/{{$entidade->id}}/proposta" class="add-button button">Adicionar</a>
                </td>
            </tr>
        </table>
    </div>

@endsection
