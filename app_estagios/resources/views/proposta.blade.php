<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestão de Estágios - Proposta</title>
        <link rel="stylesheet" href="../../../app_estagios/public/style.css/style.css">
        <link rel="stylesheet" href="../../../master.css">
    </head>
    <body>
    <div id="nav-body">
        <nav id="navbar">
            <ul id="navbar-menu">
              <li><a href="meusdados2.blade.php">Os Meus Dados</a></li>
              <li><a href="notificacoes.blade.php">Notificações</a></li>
              <li><a href="propostas_estagios.blade.php" class="active">Procurar Propostas de Estágio</a></li>
              <li class="nav-separator"></li>
              <li><a href="descricao_estagio.blade.php">Descrição do estágio</a></li>
              <li><a href="plano_atividades.blade.php">Plano de Atividades</a></li>
              <li><a href="../../../sumarios.html">Sumários</a></li>
              <li class="nav-separator"></li>
              <li><a href="">Terminar Sessão</a></li>
            </ul>
        </nav>
    </div>
        <div id="content">

            <section id="user-info">
                <ul>
                    <li>[NOME DO UTILIZADOR]</li>
                    <li class="user-info-separator"> | </li>
                    <li>[NOME DA ENTIDADE ACOLHEDORA]</li>
                </ul>
            </section>

            <h1 id="page-title">Proposta de Estágio</h1>

            <div class="info-section-container">
              <h2 class="sub-title">[NOME DA ENTIDADE ACOLHEDORA]</h2>
              <div class="info-section">
                <p>Projeto: [NOME DO PROJETO]</p><br><br>
                <p>Estagiário(s): [NOME DO ESTAGIARIO]</p><br>
                <p>Orientador: [NOME DO ORIENTADOR]</p><br>
                <p>Supervisor: [NOME DO SUPERVISOR]</p><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident, sunt in culpa qui officia deserunt
                  mollit anim id est laborum.</p><br>
                <p>Requisitos:</p>
                <ul class="button-spacing">
                  <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                  <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                  <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                  <li>[PLACEHOLDER]:<span class="underlined-space">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                </ul>

                <p>Cronograma:</p>
                <table id="propostas-table">
                  <tr>
                    <th>ID Tarefa</th>
                    <th>Descrição da Tarefa</th>
                    <th>Duração</th>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua.</td>
                    <td>
                      9 dias
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua.</td>
                    <td>
                      9 dias
                    </td>
                  </tr>
                </table>

                <a href="#" class="accept-button button">Aceitar Proposta</a>
              </div>
            </div>

        </div>


    </body>
</html>
