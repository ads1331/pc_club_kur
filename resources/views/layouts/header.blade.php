<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПК Клуб</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <h1>ПК Клуб</h1>
            <nav>
                <a href="/">Главная</a>
                <a href="/computer">Комьютеры</a>
                <a href="/games">Игры</a>
                <a href="/booking">Записаться</a>
                <a href="/about">Где нас найти</a>
                @auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
@endauth
                @guest
                <a href="/login">Вход</a>
                <a href="/register">Регистрация</a>
                @endguest
            </nav>
        </div>
    </header>