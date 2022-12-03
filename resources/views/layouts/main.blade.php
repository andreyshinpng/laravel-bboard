<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/forms.css">
    <title>@yield('title')</title>
</head>
<body>

<header>
    <div class="container">
        <div class="navbar">
            <div class="navbar-left">
                <a href="{{ route('home') }}">Пылито.ру</a>
            </div>
            <div class="navbar-right">
                @guest
                    <a href="{{ route('login') }}">Вход</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                @endguest
                @auth
                    <a href="{{ route('profile') }}">Профиль</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="btn-nav" value="Выйти">
                    </form>
                @endauth
            </div>
        </div>
    </div>
</header>

@yield('content')

</body>
</html>
