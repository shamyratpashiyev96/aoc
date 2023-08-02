<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <header class="flex_row">
        <div class="header__inner_wrapper flex_row">
            <a href="{{ route('main_page',app()->getLocale()) }}" class="header__logo_block flex_row">
                <img class="header__logo_img" src="{{ asset('icons/logo_icon.png') }}" alt="" />
                <h2 class="header__logo_text">@lang('app.layout.logo_text')</h2>
            </a>

            <div class="header__nav_block flex_row">
                <a href="{{ route('main_page',app()->getLocale()) }}" class="header__nav_link">@lang('app.layout.main_page')</a>
                <a href="#" class="header__nav_link">@lang('app.layout.about_us_page')</a>
                <a href="{{ route('news_page',app()->getLocale()) }}" class="header__nav_link">@lang('app.layout.news_page')</a>
                <a href="#" class="header__nav_link">@lang('app.layout.gallery_page')</a>
                <a href="#" class="header__nav_link">@lang('app.layout.contacts_page')</a>
            </div>

            <div class="header__langs_block flex_row">
                <a href="{{ isset($item_id) ? route(Route::currentRouteName(),['lang'=>'tm','id'=>$item_id]) : route(Route::currentRouteName(),['lang'=>'tm']) }}"><img class="header__lang_flag" src="{{ asset('icons/tm.svg') }}" alt=""></a>
                <a href="{{ isset($item_id) ? route(Route::currentRouteName(),['lang'=>'tm','id'=>$item_id]) : route(Route::currentRouteName(),['lang'=>'tm']) }}"><img class="header__lang_flag" src="{{ asset('icons/ru.svg') }}" alt=""></a>
                <a href="{{ isset($item_id) ? route(Route::currentRouteName(),['lang'=>'tm','id'=>$item_id]) : route(Route::currentRouteName(),['lang'=>'tm']) }}"><img class="header__lang_flag" src="{{ asset('icons/en.svg') }}" alt=""></a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="flex_row">
        <div class="footer__inner_wrapper flex_col">
            <div class="footer__logo_row flex_row">
                <img class="footer__logo_img" src="{{ asset('icons/logo_icon.png') }}" alt="">
                <h2 class="footer__logo_text">@lang('app.layout.logo_text')</h2>
            </div>

            <div class="footer__nav_row flex_row">
                <a href="#" class="footer__nav_link">@lang('app.layout.main_page')</a>
                <a href="#" class="footer__nav_link">@lang('app.layout.about_us_page')</a>
                <a href="#" class="footer__nav_link">@lang('app.layout.news_page')</a>
                <a href="#" class="footer__nav_link">@lang('app.layout.gallery_page')</a>
                <a href="#" class="footer__nav_link">@lang('app.layout.contacts_page')</a>
            </div>

            <div class="footer__contacts_row flex_row">
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">@lang('app.layout.phone_key'): </span>
                    <a href="tel:99312461866" class="footer__value">+99312 46-18-66</a>
                </div>
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">@lang('app.layout.fax_key'): </span>
                    <a href="tel:99312482340" class="footer__value">+99312 48-23-40</a>
                </div>
                <div class="footer__key_value_wrapper">
                    <span class="footer__key">@lang('app.layout.email_key'): </span>
                    <a href="mailto:info.aoc@gmail.com" class="footer__value">INFO.AOC@GMAIL.COM</a>
                </div>
            </div>

            <span class="footer__copyright_text">{{ date('Y') }} @lang('app.layout.copyright_text')</span>
        </div>
    </footer>
</body>
</html>