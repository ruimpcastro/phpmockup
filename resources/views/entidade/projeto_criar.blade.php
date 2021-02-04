@extends('master')

@section('header-contents')
    <title>Entidade - Projeto</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidade/{{$entidade->id}}/home/">Os Meus Dados</a></li>
    <li><a href="/entidade/{{$entidade->id}}/notificacoes/">Notificações</a></li>
    <li><a href="/entidade/{{$entidade->id}}/projeto/" class="active">Propostas de Estágio</a></li>
    <li><a href="/entidade/{{$entidade->id}}/orientador">Orientadores</a></li>
    <li class="nav-separator"></li>
    <li><a href="/login">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->nome}}</h2>
        <div class="info-section">
            <form action="/entidade/{{$entidade->id}}/projeto/guardar" method="post">
                @CSRF
                <input name="redirect" type="text" value="/entidade/{{$entidade->id}}/projeto" hidden>
                <input name="entidadeId" type="number" value={{$entidade->id}} hidden>
                <input name="aprovado" type="number" value=0 hidden>
                <input name="cronoCount" id="cronoCount" type="number" value=0 hidden>
                <p>Projeto: </p><input name="titulo" type="text" required><br><br>
                <p>Perfil Profissional: </p>
                <textarea name="perfilProfissional" cols="50" rows="2" required></textarea>
                <br><br>
                <p>Descrição: </p>
                <textarea name="descricao" cols="50" rows="10" required></textarea>
                <br><br>
                <p>Objetivos: </p>
                <textarea name="objetivos" cols="50" rows="10" required></textarea>
                <br><br>
                <p>Cronograma:</p><br>
                <div class="table-container">
                    <table id="propostas-table" class="button-spacing">
                        <tr>
                            <th>Descrição da Tarefa</th>
                            <th>Duração</th>
                            <th>
                                <a class="neutral-button button add-row-btn">+</a>
                                <a class="delete-button button rem-row-btn">-</a>
                            </th>
                        </tr>
                    </table>
                </div>
                <input type="submit" class="accept-button button" value="Submeter Proposta">
                <a href="/entidades/{{$entidade->id}}/propostas" class="delete-button button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

@section("script-imports")
    <script type="text/javascript" src="{{ asset('js/addTableRow.js') }}"></script>
@endsection
