<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" i
    ntegrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{('img/controle-de-video-game.png')}}">
    <title>@yield('titulo')</title>
</head>
<header class="container">
    <nav>
        <div class="box">
            <a href="{{ ('index') }}">
                <p class="log">MOOV<br>GAME</p>
                <a>
             <a href="{{ ('index') }}"class="about-us">
                <h3>Inicio</h3>
            </a>
            <a href="{{ ('sobrenos') }}"  class="about-us" 
            style="bottom: 197px; left: 290px;" >
                <h3>Visão geral</h3>
            </a>

        </div><!--div logo-->
        <div class="box different">
            <ul class="list">
                <li>
                  <a href="@yield('link')">
                    <button class="login">@yield('nome')
                        </button>
                        <a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
    @yield('content')
</body>
</html>