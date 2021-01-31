@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade" class="active">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Entidades</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Nome</th>
                <th>Abrev.</th>
                <th>Orientador</th>
                <th>Opções</th>
            </tr>
            @foreach($entidades as $e)
                <tr>
                    <td>{{$e->nome}}</td>
                    <td>{{$e->abreviatura}}</td>
                    <td>{{$e->orientador->nome}}</td>
                    <td>
                        <a href="/diretor/{{$diretor->id}}/entidade/{{$e->id}}/detalhes/" class="details-button button">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/diretor/{{$diretor->id}}/entidade/criar/" class="add-button button">Adicionar</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
