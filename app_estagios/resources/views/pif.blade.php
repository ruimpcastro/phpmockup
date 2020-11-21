<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
        <link rel="stylesheet" href="../../../app_estagios/public/style.css/style.css">
        <link rel="stylesheet" href="../../../master.css">
    </head>
    <body>

    <nav id="navbar">
        <ul id="navbar-menu">
            <li><a href="meusdados2.blade.php">Home</a></li>
            <li><a href="pif.blade.php">PIF</a></li>
            <li><a href="../../../sumarios.html">Sumários</a></li>
        </ul>
    </nav>

    <div id="content">
        <form>
            <label for="entrada1">Entrada A</label>
            <input type="text" id="entrada1" name="1entrada" placeholder="Primeira entrada">

            <label for="entrada2">Entrada B</label>
            <input type="text" id="entrada2" name="2entrada" placeholder="Segunda entrada">

            <label for="entrada3">Entrada C</label>
            <input type="text" id="entrada3" name="3entrada" placeholder="terceira entrada">

            <button type="submit">Submeter</button>
        </form>


    </div>
        <footer>Feito pelos BackendStorm</footer>
    </body>
</html>
