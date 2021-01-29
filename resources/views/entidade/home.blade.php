@extends('master')

@section('header-contents')
    <title>Entidade - Home</title>
@endsection

@section('sidemenu-options')
    <li><a href="/entidades/{{$entidade->id}}/home" class="active">Os Meus Dados</a></li>
    <li><a href="/entidades/{{$entidade->id}}/notificacoes">Notificações</a></li>
    <li><a href="/entidades/{{$entidade->id}}/propostas">Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section('topbar-contents')
    <li>{{$entidade->nome}} ({{$entidade->abreviatura}})</li>
@endsection

@section('mainpage-contents')
    <h1 id="page-title">Os Meus Dados</h1>

    <div class="info-section-container">
        <h2 class="sub-title">Informações da Entidade</h2>
        <div class="info-section">
            <ul class="button-spacing">
                <li>Designação da Entidade: <span class="underlined-space">{{$entidade->nome}}</span></li>
                <li>Abreviatura: <span class="underlined-space">{{$entidade->abreviatura}}</span></li>
                <br>
                <p>Contactos da Entidade:</p><br>
                <table id="contacts-table">
                    <tr>
                        <td>
                            <div>
                                <p>Telemóvel:</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <p>Telemóvel:</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <p>Telemóvel:</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </ul>
            <a href="meusdados_form.blade.php" class="button edit-button">Alterar Dados</a>
        </div>
    </div>
@endsection
