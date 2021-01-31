@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades / Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto" class="active">Propostas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <p>Projeto: {{$projeto->titulo}}</p><br><br>
            <p>Estagiário(s): [TBD]</p><br>
            <p>Orientador: {{$orientador->nome}} ({{$orientador->email}})</p><br>
            <p>Supervisor: [TBD]</p><br><br>
            <p>Perfil: {{$projeto->perfilProfissional}}</p><br><br>
            <p>{{$projeto->descricao}}</p><br><br>
            <p>Cronograma:</p><br>
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

            <a href="/entidade/{{$entidade->id}}/projeto/{{$projeto->id}}/editar" class="add-button button">Aprovar</a>
            <a href="/diretor/{{$diretor->id}}/projeto/{{$projeto->id}}/justificarReprovacao/" class="delete-button button">Reprovar</a>
        </div>
    </div>
@endsection
