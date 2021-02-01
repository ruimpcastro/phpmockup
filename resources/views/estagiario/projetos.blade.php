@extends('master')

@section('header-contents')
    <title>Estagiario(a) - Home</title>
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

    <h1 id="page-title">Entidades</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Projeto</th>
                <th>Entidade</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
            @foreach($projeto as $p)
                <tr>
                    <td>{{$p->titulo}}</td>
                    <td>{{$p->entidade->nome}}</td>
                    <td>{{$p->descricao}}</td>
                    <td>
                        <a href="/estagiario/{{$estagiario->id}}/projeto/{{$p->id}}/detalhes" class="add-button button">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
