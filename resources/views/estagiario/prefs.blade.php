@extends('master')

@section('header-contents')
    <title>Estagiario(a) - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/estagiario/{{$estagiario->id}}/home">Os Meus Dados</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/projeto" >Propostas de Estágio</a></li>
    <li><a href="/estagiario/{{$estagiario->id}}/prefs" class="active">Propostas Selecionadas</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$estagiario->nome}} ({{$estagiario->email}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Preferências</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Projeto</th>
                <th>Entidade</th>
                <th>Descrição</th>
                <th>Prioridade</th>
                <th>Opções</th>
            </tr>
            @foreach($prefs as $p)
                <tr>
                    <form action="/preferencia/guardar" id="prioridade{{$loop->index}}" method="post">
                        @CSRF
                        @method('PUT')
                        <input type="number" name="estagiarioId" value="{{$p->pivot->estagiario_id}}" hidden>
                        <input type="number" name="projetoId" value="{{$p->pivot->projeto_id}}" hidden>
                        <input type="number" name="prefId" value="{{$p->pivot->id}}" hidden>
                        <input type="text" name="redirect" value="/estagiario/{{$estagiario->id}}/prefs" hidden>
                    <td>{{$p->titulo}}</td>
                    <td>{{$p->entidade->nome}}</td>
                    <td>{{$p->descricao}}</td>
                    <td><select name="prioridade" form="prioridade{{$loop->index}}">
                            <option value="1" @if($p->pivot->prioridade == 1) selected @endif>1</option>
                            <option value="2" @if($p->pivot->prioridade == 2) selected @endif>2</option>
                            <option value="3" @if($p->pivot->prioridade == 3) selected @endif>3</option>
                        </select>
                    </td>
                    <td>
                        <a href="/estagiario/{{$estagiario->id}}/projeto/{{$p->id}}/detalhes" class="add-button button">Detalhes</a>
                        <input type="submit" class="add-button button" value="Guardar Prioridade">
                        <a href="/estagiario/{{$estagiario->id}}/projeto/{{$p->id}}/detalhes" class="cancel-button button">X</a>
                    </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
