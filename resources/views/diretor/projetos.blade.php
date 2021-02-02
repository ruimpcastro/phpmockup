@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto" class="active">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/confs">Configurações</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Projetos</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Projeto</th>
                <th>Entidade</th>
                <th>Aprovação</th>
                <th>Opções</th>
            </tr>
            @foreach($entidades as $e)
                @foreach($e->projetos as $p)
                    <tr>
                        <td>{{$p->titulo}}</td>
                        <td>{{$e->nome}}</td>
                        @if($p->aprovado)
                            <td>Aprovado</td>
                        @else
                            <td>Aprovação Pendente</td>
                        @endif
                        <td>
                            <a href="/diretor/{{$diretor->id}}/projeto/{{$p->id}}/detalhes" class="add-button button">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
@endsection
