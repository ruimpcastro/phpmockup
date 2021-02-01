@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario" class="active">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/datas">Datas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Estagiários</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Projeto</th>
                <th>Opções</th>
            </tr>
            @foreach($estagiarios as $e)
                <tr>
                    <td>{{$e->nome}}</td>
                    <td>{{$e->email}}</td>
                    @if($e->projeto)
                        <td>{{$e->projeto->titulo}}</td>
                    @else
                        <td>N/a</td>
                    @endif
                    <td>
                        <a href="/diretor/{{$diretor->id}}/estagiario/{{$e->id}}/detalhes" class="add-button button">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/diretor/{{$diretor->id}}/estagiario/criar/" class="add-button button">Adicionar</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
