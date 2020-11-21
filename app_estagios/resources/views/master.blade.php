<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        @yield("header-contents")
    </head>
    <body>
    <div id="nav-body">

        <nav id="navbar">
            <ul id="navbar-menu">
                @yield("sidemenu-options")
            </ul>
        </nav>
    </div>
    <div id="content">

        <section id="user-info">
            <ul>
                @yield("topbar-contents")
            </ul>
        </section>

        @yield("mainpage-contents")

    </div>


    </body>
</html>
