@extends('master')

@section('header-contents')
    <title>Entidade - Orientador</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/projeto">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador" class="active">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Orientador</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Telemovel</th>
                <th>Opções</th>
            </tr>
            @if($orientador)
            <tr>
                <td>{{$orientador->nome}}</td>
                <td>{{$orientador->email}}</td>
                <td>{{$orientador->telemovel}}</td>
                <td>
                    <a href="/entidade/{{$entidade->id}}/orientador/editar" class="details-button button">Detalhes</a>
                </td>
            </tr>
            @else
                <tr>
                    <td>N/a</td>
                    <td>N/a</td>
                    <td>N/a</td>
                    <td>
                        <a href="/entidade/{{$entidade->id}}/orientador/editar" class="edit-button button">Alterar</a>
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
