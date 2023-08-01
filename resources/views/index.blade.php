@extends('layout')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

    <main class="flex_col">
        <div class="main__banner_wrapper flex_row">
            <img src="{{ asset('img/banner_main.jpg') }}" alt="">
            <div class="main__upper_layer">
                
                <div class="main__logo_wrapper_1">
                    <span>Спорт - источник силы, красоты<br> и здоровья</span>
                </div>

                <div class="main__logo_wrapper_2 flex_row">
                    <img src="{{ asset('icons/logo_banner.svg') }}" alt="">
                    <span>«Arkadag Serdarly<br> bagtyýar ýaşlar ýyly»</span>
                </div>
            </div>
        </div>
        
        <section class="flipcards flex_row">
            <div class="flipcards__inner_wrapper flex_row">

                <div class="flipcards__flipcard_container">
                    <div class="flipcards__flipcard_inner_wrapper">
                        <div class="flipcards__front_side">
                            <img src="{{ asset('img/flip_card_1.jpg') }}" alt="">
                            <span class="flipcards__flipcard_title">
                                Об олимпийском городке
                            </span>
                        </div>

                        <div class="flipcards__back_side">
                            <img src="{{ asset('img/flip_card_1.jpg') }}" alt="">
                            <h2 class="flipcards__flipcard_title">ОБ ОЛИМПИЙСКОМ ГОРОДКЕ</h2>
                            <div class="flipcards__flipcard_description">
                                Уникальный объект, который, не имеет аналогов в Центральноазиатском регионе, стал местом проведения Азиатских игр 
                                в закрытых помещениях, в него вошли более 30 объектов различного назначения, в том числе Стадион «Олимпийский», 
                                Паралимпийский комплекс и реабилитационный медицинский центр. Инициатором строительства является Президент 
                                Туркменистана Гурбангулы Бердымухамедов. В нём прошли церемонии открытия и закрытия игр, все соревнования, 
                                а также церемонии награждения победителей.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flipcards__flipcard_container">
                    <div class="flipcards__flipcard_inner_wrapper">
                        <div class="flipcards__front_side">
                            <img src="{{ asset('img/flip_card_2.jpg') }}" alt="">
                            <span class="flipcards__flipcard_title">
                                Спортивные комлексы
                            </span>
                        </div>

                        <div class="flipcards__back_side">
                            <img src="{{ asset('img/flip_card_2.jpg') }}" alt="">
                            <h2 class="flipcards__flipcard_title">ОБ ОЛИМПИЙСКОМ ГОРОДКЕ</h2>
                            <div class="flipcards__flipcard_description flex_row">
                                <div class="flipcards__left_column flex_col">
                                    <span class="bold">Объект</span>
                                    <span>Стадион «Олимпийский»</span>
                                    <span>Крытый велотрек</span>
                                    <span>Спортивный комплекс боевых искусств</span>
                                    <span>Крытая легкоатлетическая арена</span>
                                    <span>Большой многофункциональный зал</span>
                                    <span>Крытый теннисный корт</span>
                                    <span>Крытый бассейн</span>
                                    <span>Многофункциональный зал</span>
                                    <span>Крытая арена</span>
                                </div>
                                <div class="flipcards__right_column flex_col">
                                    <span class="bold">Вместимость</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                    <span>100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flipcards__flipcard_container">
                    <div class="flipcards__flipcard_inner_wrapper">
                        <div class="flipcards__front_side">
                            <img src="{{ asset('img/flip_card_3.jpg') }}" alt="">
                            <span class="flipcards__flipcard_title">
                                ОТЕЛИ
                            </span>
                        </div>

                        <div class="flipcards__back_side">
                            <img src="{{ asset('img/flip_card_3.jpg') }}" alt="">
                            <h2 class="flipcards__flipcard_title">ОТЕЛИ</h2>
                            <div class="flipcards__flipcard_description flex_column">
                                <span class="bold">Отель “Олимпия” вместимость 450</span>
                                <p>
                                    Президентский люкс - 1; Стандартный одноместный номер - 136; Стандартный двухместный номер - 36; люкс - 45; апартаменты - 5; номера для людей с ограниченными возможностями - 2; 5 зал для конференции - 114; 2 ресторана - 256; бар -58; лаудж бар - 71; кондитерская - 45; СПА центр
                                </p>
                                    <span class="bold">Отель “Спорт” вместимость 450</span>
                                    <p>
                                    Президентский люкс - 2; Стандартный одноместный номер - 228; Стандартный двухместный номер - 108; люкс - 48; апартаменты - 64; номера для людей с ограниченными возможностями - 8; зал для конференции - 700; 4 ресторана - 1030; 2 кафе - 178; СПА центр
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flipcards__flipcard_container">
                    <div class="flipcards__flipcard_inner_wrapper">
                        <div class="flipcards__front_side">
                            <img src="{{ asset('img/flip_card_4.jpg') }}" alt="">
                            <span class="flipcards__flipcard_title">
                                ИНФРАСТРУКТУРА
                            </span>
                        </div>

                        <div class="flipcards__back_side">
                            <img src="{{ asset('img/flip_card_4.jpg') }}" alt="">
                            <h2 class="flipcards__flipcard_title">ИНФРАСТРУКТУРА</h2>
                            <div class="flipcards__flipcard_description flex_column">
                                <span class="bold">Монорельс длина - 5 138 метров</span>
                                <p>
                                    Высота от 6 до 13 метров; 8 станций; вместимость одного поезда 70 человек; скорость движения 46км/ч (максимальная 70 км/ч);
                                </p>
                                    <span class="bold">Медицинский восстановительный центр</span>
                                    <p>
                                    МРТ; УЗИ; ЭКГ; рефлексотерапия; вакуумная терапия; гальвано терапия; физиотерапия; электротерапия; допплерография. Лаборатория; гимнастический зал; 8 палат; 1 массажный кабинет; 1 бассейн; 1 кафе.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about_us flex_row">
            <div class="about_us__inner_wrapper flex_col">
                <h2 class="about_us__title">ОБ ОЛИМПИЙСКОМ ГОРОДКЕ</h2>
                <div class="about_us__images_row flex_row">
                    <img src="{{ asset('img/about_us_1.jpg') }}" alt="">
                    <img src="{{ asset('img/about_us_2.jpg') }}" alt="">
                    <img src="{{ asset('img/about_us_3.jpg') }}" alt="">
                </div>
                <div class="about_us__text_block">
                    По поручению нашего уважаемого Президента, в нашей стране проведена масштабная работа по развитию физкультурно-оздоровительного движения, массового спорта и спортсменов с высокими достижениями, подготовке туркменских спортсменов к крупным международным соревнованиям, город Ашхабад полностью соответствует международным стандартам, не имеет аналогов во всем регионе и является ярким символом Государственной политики, по обеспечению благополучного и стабильного образа жизни своего народа. Олимпийская деревня стала особым украшением нашего мраморного города, образуя свое неповторимое единство с неповторимой своей красотой и другими объектами спорта и физкультуры, расположенными в нем. В декабре 2017 года была создана Администрация Олимпийского города администрации города Ашхабада.
                </div>
            </div>
        </section>
    </main>
@endsection