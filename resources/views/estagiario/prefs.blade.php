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
                <th>Apagar</th>
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
                            @for($i = 1; $i <= $estagiario->diretor->maxPrefs; $i++)
                                <option value="{{$i}}" @if($p->pivot->prioridade == $i) selected @endif>{{$i}}</option>
                            @endfor
                        </select>
                    </td>
                    <td>
                        <a href="/estagiario/{{$estagiario->id}}/projeto/{{$p->id}}/detalhes" class="add-button button">Detalhes</a>
                        <input type="submit" class="add-button button" value="Guardar Prioridade">
                        </form>
                    </td>
                    <td>
                        <form action="/preferencia/apagar" method="post">
                            @CSRF
                            @method('DELETE')
                            <input type="text" name="redirect" value="/estagiario/{{$estagiario->id}}/prefs" hidden>
                            <input type="number" name="prefId" value="{{$p->pivot->id}}" hidden>
                            <input type="submit" class="cancel-button button" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
