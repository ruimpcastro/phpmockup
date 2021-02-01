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
        <img class="logo-uac" src="../../../imgs/logouac.png" alt="LOGOUAC">
        <h1 id="app-title">Plataforma de Gestão<br>de Estágios</h1>
        <div class="login-wrapper">
          <div id="login-form-div">
            <form id="login-form" action="index.blade.php" method="post">
              <p>Utilizadores:</p>
              <input type="text" name="username" value="">
              <p>Palavra-Passe:</p>
              <input type="text" name="password" value="">
              <input class="accept-button button login-submit" type="submit" name="authenticate" value="Iniciar Sessão">
            </form>
          </div>
        </div>
          <div class="login-shortcut">
              @foreach($diretores as $d)
                  <a href="/diretor/{{$d->id}}/home/" class="login-shortcut-btn accept-button button">Diretor(a): {{$d->nome}}</a>
              @endforeach
                  @foreach($estagiarios as $est)
                      <a href="/diretor/{{$est->id}}/home/" class="login-shortcut-btn accept-button button">Estagiario(a): {{$est->nome}}</a>
                  @endforeach
              @foreach($entidades as $e)
                  <a href="/entidade/{{$e->id}}/home/" class="login-shortcut-btn accept-button button">Entidade: {{$e->nome}}</a>
              @endforeach
          </div>
      </div>
    </body>
</html>
