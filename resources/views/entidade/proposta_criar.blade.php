@extends('master')

@section('header-contents')
    <title>Entidade - Proposta</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidades/{{$entidade->id}}/home/">Os Meus Dados</a></li>
    <li><a href="/entidades/{{$entidade->id}}/notificacoes/">Notificações</a></li>
    <li><a href="/entidades/{{$entidade->id}}/propostas/" class="active">Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->designacao}} ({{$entidade->designacao_curta}})</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Proposta de Estágio</h1>

    <div class="info-section-container">
        <h2 class="sub-title">{{$entidade->designacao}}</h2>
        <div class="info-section">
            <form action="" method="POST">
                @CSRF
                <p>Projeto: </p><input type="text"><br><br>
                <p>Supervisor: </p><input type="text"><br><br>
                <p>Descrição: </p>
                <textarea name="" id="" cols="50" rows="10"></textarea>
                <br><br>
                <p>Cronograma:</p><br>
                <div class="table-container">
                    <table id="propostas-table" class="button-spacing">
                        <tr>
                            <th>Descrição da Tarefa</th>
                            <th>Duração</th>
                            <th>
                                <a class="neutral-button button add-row-btn">Adicionar</a>
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
