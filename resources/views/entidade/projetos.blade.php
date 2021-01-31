@extends('master')

@section('header-contents')
    <title>Entidade - Notificações</title>
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

    <h1 id="page-title">Propostas da Estágio</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Entidade Acolhedora</th>
                <th>Projeto</th>
                <th>Estado</th>
                <th>Opções</th>
            </tr>
            @foreach($projetos as $p)
                <tr>
                    <td>{{$entidade->nome}}</td>
                    <td>{{$p->titulo}}</td>
                    @if($p->aprovado)
                    <td>Aprovado</td>
                    @else
                    <td>Aprovação Pendente</td>
                    @endif
                    <td>
                        <a href="/entidade/{{$entidade->id}}/projeto/{{$p->id}}/detalhes/" class="details-button button">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/entidade/{{$entidade->id}}/projeto/criar/" class="add-button button">Adicionar</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
