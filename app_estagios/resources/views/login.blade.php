<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestão de Estágios - Os Meus Dados</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login-styles.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" />
    </head>
    <body>
      <div class="wrapper">
        <img class="logo-uac" src="imgs/logouac.png" alt="LOGOUAC">
        <h1 id="app-title">Plataforma de Gestão<br>de Estágios</h1>
        <div class="login-wrapper">
          <div id="login-form-div">
            <form id="login-form" action="index.html" method="post">
              <p>Utilizadors:</p>
              <input type="text" name="username" value="">
              <p>Palavra-Passe:</p>
              <input type="text" name="password" value="">
              <input class="accept-button button login-submit" type="submit" name="authenticate" value="Iniciar Sessão">
            </form>
          </div>
        </div>
          <div class="login-shortcut">
              <a href="/entidade/1/home" class="login-shortcut-btn accept-button button">Login: Entidade Acolhedora</a>
              <a href="/diretor/1/" class="login-shortcut-btn accept-button button">Login: Diretor de Curso</a>
              <a href="/orientador/1/" class="login-shortcut-btn accept-button button">Login: Orientador</a>
              <a href="/supervisor/1/" class="login-shortcut-btn accept-button button">Login: Supervisor</a>
              <a href="/estagiario/1/" class="login-shortcut-btn accept-button button">Login: Estagiário</a>
          </div>
      </div>
    </body>
</html>
