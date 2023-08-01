<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <header class="flex_row">
        <div class="header__inner_wrapper flex_row">
            <a href="#" class="header__logo_block flex_row">
                <img class="header__logo_img" src="{{ asset('icons/logo_icon.png') }}" alt="" />
                <h2 class="header__logo_text">Администрация Олимпийского <br>городка хякимлика Ашхабада</h2>
            </a>

            <div class="header__nav_block flex_row">
                <a href="#" class="header__nav_link">Главная</a>
                <a href="#" class="header__nav_link">О нас</a>
                <a href="#" class="header__nav_link">Новости</a>
                <a href="#" class="header__nav_link">Галерея</a>
                <a href="#" class="header__nav_link">Контакты</a>
            </div>

            <div class="header__langs_block flex_row">
                <a href="#"><img class="header__lang_flag" src="{{ asset('icons/tm.svg') }}" alt=""></a>
                <a href="#"><img class="header__lang_flag" src="{{ asset('icons/ru.svg') }}" alt=""></a>
                <a href="#"><img class="header__lang_flag" src="{{ asset('icons/en.svg') }}" alt=""></a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="flex_row">
        <div class="footer__inner_wrapper flex_col">
            <div class="footer__logo_row flex_row">
                <img class="footer__logo_img" src="{{ asset('icons/logo_icon.png') }}" alt="">
                <h2 class="footer__logo_text">Администрация Олимпийского <br>городка хякимлика Ашхабада</h2>
            </div>

            <div class="footer__nav_row flex_row">
                <a href="#" class="footer__nav_link">Главная</a>
                <a href="#" class="footer__nav_link">О нас</a>
                <a href="#" class="footer__nav_link">Новости</a>
                <a href="#" class="footer__nav_link">Галерея</a>
                <a href="#" class="footer__nav_link">Контакты</a>
            </div>

            <div class="footer__contacts_row flex_row">
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">ТЕЛЕФОН: </span>
                    <span class="footer__value">+99312 46-18-66</span>
                </div>
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">ФАКС: </span>
                    <span class="footer__value">+99312 48-23-40</span>
                </div>
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">ПОЧТА: </span>
                    <span class="footer__value">INFO.AOC@GMAIL.COM</span>
                </div>
            </div>

            <span class="footer__copyright_text">2023 ВСЕ ПРАВА ЗАЩИЩЕНЫ</span>
        </div>
    </footer>
</body>
</html>