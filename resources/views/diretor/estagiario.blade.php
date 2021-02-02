@extends('master')

@section('header-contents')
    <title>Diretor - Estagiário</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade">Entidades/Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/projeto">Propostas</a></li>
    <li><a href="/diretor/{{$diretor->id}}/estagiario" class="active">Estagiários</a></li>
    <li><a href="/diretor/{{$diretor->id}}/supervisor">Supervisor</a></li>
    <li><a href="/diretor/{{$diretor->id}}/confs">Configurações</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}} ({{$diretor->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Estagiário</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Estagiário</h2>
        <div class="info-section">
            <p>Nome: {{$estagiario->nome}}</p><br><br>
            <p>E-Mail: {{$estagiario->email}}</p><br><br>
            <p>Telemovel: {{$estagiario->telemovel}}</p><br><br>
            @if($estagiario->projeto)
            <p>Projeto: {{$estagiario->projeto->titulo}}</p><br><br>
            <p>Orientador: PLACEHOLDER</p><br>
            <p>Supervisor: [TBD]</p><br><br>
            <p>{{$estagiario->projeto->descricao}}</p><br><br>
            @else
            <p>Projeto: N/a</p><br><br>
                <p>Preferências:</p><br>
                <table id="propostas-table" class="button-spacing">
                    <tr>
                        <th>Projeto</th>
                        <th>Entidade</th>
                        <th>Prioridade</th>
                        <th>Supervisor</th>
                        <th>Opções</th>
                    </tr>
                    @foreach($estagiario->preferencias as $p)
                        <tr>
                            <form action="/projeto/{{$p->id}}/editar" id="atrib{{$loop->index}}" method="post">
                                @CSRF
                                @method('PUT')
                                <input type="text" name="redirect" value="/diretor/{{$diretor->id}}/estagiario" hidden>
                                <input type="number" name="projetoId" value="{{$p->id}}" hidden>
                                <input type="number" name="estagiarioId" value="{{$estagiario->id}}" hidden>
                                <input type="number" name="entidadeId" value="{{$p->entidade_id}}" hidden>
                                <input type="text" name="titulo" value="{{$p->titulo}}" hidden>
                                <input type="text" name="descricao" value="{{$p->descricao}}" hidden>
                                <input type="text" name="perfilProfissional" value="{{$p->perfilProfissional}}" hidden>
                                <input type="number" name="aprovado" value="{{$p->aprovado}}" hidden>
                                <td>{{$p->titulo}}</td>
                                <td>{{$p->entidade->nome}}</td>
                                <td>{{$p->pivot->prioridade}}</td>
                                <td>
                                    <select name="supervisor" form="atrib{{$loop->index}}">
                                        @foreach($diretor->supervisores as $sup)
                                            <option value="{{$sup->id}}">{{$sup->nome}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="submit" class="add-button button" value="Atribuir Projeto"></td>
                            </form>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection
