@extends('master')

@section('header-contents')
    <title>Diretor - Entidades</title>
@endsection

@section('sidemenu-options')
    <li><a href="/diretor/{{$diretor->id}}/home">Os Meus Dados</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade" class="active">Entidades / Orientadores</a></li>
    <li><a href="/diretor/{{$diretor->id}}/entidade" class="active">Validar Projetos</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$diretor->nome}}</li>
@endsection

@section('mainpage-contents')

    <h1 id="page-title">Entidades</h1>

    <div class="table-container">
        <table id="propostas-table">
            <tr>
                <th>Entidade</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Aprovado</th>
                <th>Detalhes</th>
                <th></th>
            </tr>
            <!--
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <select name="aprovar" id="projeto-aprovado">
                        <option value=""></option>
                        <option value="1">Aprovado</option>
                        <option value="0">Rejeitado</option>
                    </select>
                </td>
                <td>
                    <a href="#" class="button">Detalhes</a>
                </td>
                <td>
                    <a href="#" class="button">Submit</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
