@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/supervisor" class="active">Supervisor</a></li>
    <li><a href="/diretor/{{$diretor->id}}/confs">Configurações</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Supervisores</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Projeto</th>
                <th>Estagiário</th>
                <th>Opções</th>
            </tr>
            @foreach($supervisores as $s)
                <tr>
                    <td>{{$s->nome}}</td>
                    <td>{{$s->email}}</td>
                    @if($s->projeto)
                        <td>{{$s->projeto->titulo}}</td>
                        <td>{{$s->projeto->estagiario->nome}}</td>
                    @else
                        <td>N/a</td>
                        <td>N/a</td>
                    @endif
                    <td>
                        <a href="/diretor/{{$diretor->id}}/supervisor/{{$s->id}}/detalhes" class="add-button button">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/diretor/{{$diretor->id}}/supervisor/criar/" class="add-button button">Adicionar</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
