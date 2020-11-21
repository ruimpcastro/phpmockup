<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestão de Estágios - Os Meus Dados</title>
        <link rel="stylesheet" href="../../../app_estagios/public/style.css/style.css">
        <link rel="stylesheet" href="../../../master.css">
    </head>
    <body>
    <div id="nav-body">

        <nav id="navbar">
            <ul id="navbar-menu">
              <li><a href="meusdados2.blade.php" class="active">Os Meus Dados</a></li>
              <li><a href="notificacoes.blade.php">Notificações</a></li>
              <li><a href="propostas_estagios.blade.php">Procurar Propostas de Estágio</a></li>
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

            <h1 id="page-title">Os Meus Dados</h1>

            <div class="info-section-container">
              <h2 class="sub-title">Informações do Estágio</h2>
              <div class="info-section">
                <ul>
                  <li>Entidade de Acolhimento: <span class="underlined-space">[NOME DA ENTIDADE]</span></li>
                  <li>Supervisor: <span class="underlined-space">[NOME DO SUPERVISOR]</span></li>
                  <li>Orientador: <span class="underlined-space">[NOME DO ORIENTADOR]</span></li>
                </ul>
              </div>
            </div>

            <div class="info-section-container">
              <h2 class="sub-title">Dados do Estagiário</h2>
              <div class="info-section">
                <p>Informações Básicas:</p><br>
                <ul class="button-spacing">

                  <li>Nome: <input type="text" name="nome" value="PH"></li>
                  <li>Nº de Aluno: <input type="text" name="numaluno" value="PH"></li>
                  <li>Ano: <input type="number" name="nome" value="PH"></li>
                  <li>Curso: <select name="curso" id="cursos-select">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select>
                  </li>
                </ul>
                <p>Contactos:</p><br>
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
                    <td>
                      <div class="contact-remove">
                        <button class="delete-button button" type="button" name="button">X</button>
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
                    <td>
                      <div class="contact-remove">
                        <button class="delete-button button" type="button" name="button">X</button>
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
                    <td>
                      <div>
                        <button class="delete-button button" type="button" name="button">X</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <input type="text" name="designacao" value="Designação">
                      </div>
                    </td>
                    <td>
                      <div>
                        <input type="text" name="contacto" value="Contacto">
                      </div>
                    </td>
                    <td>
                      <div>
                        <button class="add-button button" type="button" name="button">Adicionar</button>
                      </div>
                    </td>
                  </tr>
                </table>
                <a href="" class="button accept-button">Guardar Alterações</a>
                <a href="" class="button cancel-button">Cancelar</a>
              </div>
            </div>

        </div>


    </body>
</html>
