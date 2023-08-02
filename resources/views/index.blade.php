@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

@section('content')

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

    <section class="gallery flex_row">
        <div class="gallery__inner_wrapper flex_col">
            <h2 class="gallery__title">ФОТОГАЛЕРЕЯ</h2>
            <div class="gallery__images_row flex_row">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="big" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="big" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="big" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
                <img class="small" src="{{ asset('img/gallery_img.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="news flex_row">
        <div class="news__inner_wrapper ">
            <h2 class="news__section_title">Новости</h2>
            <div class="news__news_row flex_row">
                <a href="#" class="news_container flex_col">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_1.jpg') }}" alt="">
                    </div>
                    <div class="content_wrapper flex_col">
                        <div class="title">
                            Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygyna iş sapary bilen ugrady
                        </div>
                        <div class="description">
                            <p>
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň duşuşygyna gatnaşmak maksady bilen, Saud Arabystany Patyşalygyna iş saparyna ugrady. Jidda şäherinde geçiriljek ýokary derejedäki sammit umumy abadançylygyň hem-de ösüşiň bähbitlerine laýyk gelýän netijeli döwletara we sebitara hyzmatdaşlygy mundan beýläk-de ösdürmäge gönükdirilendir. Aşgabadyň Halkara howa menzilinde hormatly Prezidentimizi resmi adamlar ugratdylar.

                                Uçuşyň öňüsyrasynda howa menzilinde Saud Arabystany Patyşalygynyň ilçihanasynyň wekili bilen bolan söhbetdeşlikde ähli ugurlar boýunça okgunly ösýän ikitaraplaýyn gatnaşyklaryň dostlukly häsiýete eýedigi nygtaldy. Özara bähbitli söwda-ykdysady gatnaşyklar bilen birlikde, medeni-ynsanperwer hyzmatdaşlyga uly ähmiýet berilýär. Şeýle-de Türkmenistanyň we Saud Arabystany Patyşalygynyň abraýly halkara we sebit guramalarynyň hem-de düzümleriniň çäklerinde netijeli gatnaşyk edýändigi bellenildi. Şunuň bilen baglylykda, hormatly Prezidentimiz Serdar Berdimuhamedowyň şu saparynyň we Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň sammitine gatnaşmagynyň ikitaraplaýyn we köptaraplaýyn esasda hyzmatdaşlygy işjeňleşdirmäge ýardam etjekdigine ynam bildirildi.

                                Hormatly Prezidentimiziň uçary Jidda şäherine çenli uçuşy amala aşyryp, Aýlagdaky arap döwletleriniň we Merkezi Aziýa ýurtlarynyň Döwlet baýdaklary bilen bezelen Patyşa Abdulaziz adyndaky Halkara howa menziline gondy. Haly düşelen ýodajygyň ugrunda Hormat garawuly nyzama düzüldi. Howa menzilinde hormatly Prezidentimiz Serdar Berdimuhamedowy resmi adamlar mähirli garşyladylar.

                                Bu ýerde döwlet Baştutanymyzyň Saud Arabystany Patyşalygynyň resmi wekili bilen söhbetdeşligi boldy. Söhbetdeşligiň barşynda döwletara gatnaşyklaryň ýokary derejesi bellenildi hem-de iki ýurduň dostlukly gatnaşyklary we uly kuwwata eýe bolan özara bähbitli hyzmatdaşlygy hemmetaraplaýyn pugtalandyrmaga çalyşýandygy nygtaldy. Öňümizdäki maslahatyň köptaraply gatnaşyklary hil taýdan täze derejä çykarmak maksady bilen, tagallalary birleşdirmäge ýardam etjekdigine ynam bildirildi. Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygynyň mukaddes topragynda mähirli kabul edilendigi üçin minnetdarlyk bildirip, netijeli hyzmatdaşlygy giňeltmäge, onuň many-mazmunyny baýlaşdyrmaga mundan beýläk-de ýardam bermäge taýýardygyny belledi.

                                Döwlet Baştutanymyz howa menzilinden iş sapary döwründe özi üçin niýetlenen kabulhana tarap ugrady.

                                Ertir saparyň çäklerinde hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň maslahatyna gatnaşar. Onuň gün tertibine sebit derejesinde döwletara gatnaşyklaryň derwaýys meseleleri giriziler.

                                Türkmenistan parahatçylyk söýüjilik, oňyn Bitaraplyk we “Açyk gapylar” ýörelgelerine esaslanýan daşary syýasy ugry yzygiderli durmuşa geçirip, dünýäniň ähli ýurtlary, şol sanda arap dünýäsiniň döwletleri bilen deňhukukly, netijeli hyzmatdaşlygy ösdürmäge çalyşýar. Saud Arabystany Patyşalygy bilen däp bolan gatnaşyklar munuň aýdyň mysallarynyň biridir. Şol gatnaşyklar taraplaryň hoşmeýilli erk-islegi bilen berkidilendir.

                                Häzirki döwürde özara hormat goýmagyň we ynanyşmagyň berk binýadyna esaslanan türkmen-saud gatnaşyklary täze many-mazmuna eýe bolýar. Şunda taryhyň dowamynda emele gelen, özleriniň gadymy we parasatly däplerine ygrarlydygyny görkezýän iki doganlyk halky birleşdirýän ruhy-ahlak gymmatlyklarynyň umumylygy möhüm ähmiýete eýedir. Şeýle däpleriň biri haj parzyny berjaý etmek bilen baglanyşyklydyr. Türkmenistanda biziň ildeşlerimize köpasyrlyk ruhy däplere eýerip, yslamyň mukaddesliklerine baryp görmek üçin ähli şertler döredildi.

                                Şunuň bilen baglylykda, Gurban baýramynyň bellenilýän günlerinde — 29-30-njy iýunda türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň Saud Arabystany Patyşalygynda bolandygyny, şol ýerde Mekgede haj parzyny berjaý edendigini we gurbanlyk sadakasyny berendigini bellemek gerek. Gurbanlyk sadakasynda hajy Arkadagymyzyň pederi Mälikguly aganyň we käbesi Ogulabat ejäniň jaýynyň jennetde bolmagy dileg edildi.

                                Döwlet Baştutanymyz Serdar Berdimuhamedowyň 2022-nji ýylda Türkmenistanyň Prezidenti wezipesine girişen pursadyndan ilkinji daşary ýurt saparyny hut yslam dünýäsiniň mukaddes topragyna amala aşyrandygy we şol ýerde umra haj dessurlaryny berjaý edendigi bellärliklidir.

                                Şu ýyl döwletimiziň ýakyndan ýardam bermegi netijesinde, türkmen zyýaratçylarynyň 2,5 müňe golaýy ähli musulmanlar üçin mukaddes bolan Mekge we Medine şäherlerine baryp gördi. Şunda hajy Arkadagymyzyň asylly işlerinidir başlangyçlaryny mynasyp dowam etdirýän Arkadagly hajy Serdarymyzyň baştutanlygynda üstünlikli durmuşa geçirilýän Türkmenistanyň syýasy strategiýasynyň ileri tutulýan ugurlary öz aýdyň beýanyny tapýar.

                                Türkmenistanyň Ýakyn Gündogaryň beýleki ýurtlary, hususan-da, Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlar bilen gatnaşyklary ilkibaşdan dostluk, birek-birege hormat goýmak we ynanyşmak ýörelgeleri esasynda guralýar. Hormatly Prezidentimiziň şu ýyl, degişlilikde, Bahreýn Patyşalygyna, Katar Döwletine amala aşyran resmi we döwlet saparlary, şeýle hem Gahryman Arkadagymyzyň Birleşen Arap Emirliklerine resmi sapary bu ugurda netijeli hyzmatdaşlygy okgunly ösdürmekde möhüm ädim boldy.

                                Ýurdumyzyň Merkezi Aziýanyň döwletleri bilen gatnaşyklary taryhyň dowamynda emele gelen hoşniýetli goňşuçylyk, doganlyk, özara bähbitli hyzmatdaşlyk ýörelgelerine esaslanýar. Hormatly Prezidentimiz Serdar Berdimuhamedowyň şu ýylda Täjigistan Respublikasyna amala aşyran döwlet saparynyň netijeleri munuň aýdyň subutnamasydyr.

                                Şeýlelikde, döwlet Baştutanymyzyň öňde boljak maslahata gatnaşmagy ýurdumyzyň netijeli ikitaraplaýyn we köptaraplaýyn hyzmatdaşlygy ösdürmek, oňa täze itergi bermek, umumy abadançylygyň, durnukly ösüşiň bähbidine bar bolan ykdysady we ynsanperwer kuwwatdan netijeli peýdalanmak meselelerinde işjeň orny eýelemäge ygrarlydygynyň nobatdaky beýanydyr.
                            </p>


                        </div>
                        <span class="date">18.07.2023</span>
                    </div>
                </a>

                <a href="#" class="news_container flex_col">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_2.jpg') }}" alt="">
                    </div>
                    <div class="content_wrapper flex_col">
                        <div class="title">
                            Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygyna iş sapary bilen ugrady
                        </div>
                        <div class="description">
                            <p>
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň duşuşygyna gatnaşmak maksady bilen, Saud Arabystany Patyşalygyna iş saparyna ugrady. Jidda şäherinde geçiriljek ýokary derejedäki sammit umumy abadançylygyň hem-de ösüşiň bähbitlerine laýyk gelýän netijeli döwletara we sebitara hyzmatdaşlygy mundan beýläk-de ösdürmäge gönükdirilendir. Aşgabadyň Halkara howa menzilinde hormatly Prezidentimizi resmi adamlar ugratdylar.

                                Uçuşyň öňüsyrasynda howa menzilinde Saud Arabystany Patyşalygynyň ilçihanasynyň wekili bilen bolan söhbetdeşlikde ähli ugurlar boýunça okgunly ösýän ikitaraplaýyn gatnaşyklaryň dostlukly häsiýete eýedigi nygtaldy. Özara bähbitli söwda-ykdysady gatnaşyklar bilen birlikde, medeni-ynsanperwer hyzmatdaşlyga uly ähmiýet berilýär. Şeýle-de Türkmenistanyň we Saud Arabystany Patyşalygynyň abraýly halkara we sebit guramalarynyň hem-de düzümleriniň çäklerinde netijeli gatnaşyk edýändigi bellenildi. Şunuň bilen baglylykda, hormatly Prezidentimiz Serdar Berdimuhamedowyň şu saparynyň we Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň sammitine gatnaşmagynyň ikitaraplaýyn we köptaraplaýyn esasda hyzmatdaşlygy işjeňleşdirmäge ýardam etjekdigine ynam bildirildi.

                                Hormatly Prezidentimiziň uçary Jidda şäherine çenli uçuşy amala aşyryp, Aýlagdaky arap döwletleriniň we Merkezi Aziýa ýurtlarynyň Döwlet baýdaklary bilen bezelen Patyşa Abdulaziz adyndaky Halkara howa menziline gondy. Haly düşelen ýodajygyň ugrunda Hormat garawuly nyzama düzüldi. Howa menzilinde hormatly Prezidentimiz Serdar Berdimuhamedowy resmi adamlar mähirli garşyladylar.

                                Bu ýerde döwlet Baştutanymyzyň Saud Arabystany Patyşalygynyň resmi wekili bilen söhbetdeşligi boldy. Söhbetdeşligiň barşynda döwletara gatnaşyklaryň ýokary derejesi bellenildi hem-de iki ýurduň dostlukly gatnaşyklary we uly kuwwata eýe bolan özara bähbitli hyzmatdaşlygy hemmetaraplaýyn pugtalandyrmaga çalyşýandygy nygtaldy. Öňümizdäki maslahatyň köptaraply gatnaşyklary hil taýdan täze derejä çykarmak maksady bilen, tagallalary birleşdirmäge ýardam etjekdigine ynam bildirildi. Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygynyň mukaddes topragynda mähirli kabul edilendigi üçin minnetdarlyk bildirip, netijeli hyzmatdaşlygy giňeltmäge, onuň many-mazmunyny baýlaşdyrmaga mundan beýläk-de ýardam bermäge taýýardygyny belledi.

                                Döwlet Baştutanymyz howa menzilinden iş sapary döwründe özi üçin niýetlenen kabulhana tarap ugrady.

                                Ertir saparyň çäklerinde hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň maslahatyna gatnaşar. Onuň gün tertibine sebit derejesinde döwletara gatnaşyklaryň derwaýys meseleleri giriziler.

                                Türkmenistan parahatçylyk söýüjilik, oňyn Bitaraplyk we “Açyk gapylar” ýörelgelerine esaslanýan daşary syýasy ugry yzygiderli durmuşa geçirip, dünýäniň ähli ýurtlary, şol sanda arap dünýäsiniň döwletleri bilen deňhukukly, netijeli hyzmatdaşlygy ösdürmäge çalyşýar. Saud Arabystany Patyşalygy bilen däp bolan gatnaşyklar munuň aýdyň mysallarynyň biridir. Şol gatnaşyklar taraplaryň hoşmeýilli erk-islegi bilen berkidilendir.

                                Häzirki döwürde özara hormat goýmagyň we ynanyşmagyň berk binýadyna esaslanan türkmen-saud gatnaşyklary täze many-mazmuna eýe bolýar. Şunda taryhyň dowamynda emele gelen, özleriniň gadymy we parasatly däplerine ygrarlydygyny görkezýän iki doganlyk halky birleşdirýän ruhy-ahlak gymmatlyklarynyň umumylygy möhüm ähmiýete eýedir. Şeýle däpleriň biri haj parzyny berjaý etmek bilen baglanyşyklydyr. Türkmenistanda biziň ildeşlerimize köpasyrlyk ruhy däplere eýerip, yslamyň mukaddesliklerine baryp görmek üçin ähli şertler döredildi.

                                Şunuň bilen baglylykda, Gurban baýramynyň bellenilýän günlerinde — 29-30-njy iýunda türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň Saud Arabystany Patyşalygynda bolandygyny, şol ýerde Mekgede haj parzyny berjaý edendigini we gurbanlyk sadakasyny berendigini bellemek gerek. Gurbanlyk sadakasynda hajy Arkadagymyzyň pederi Mälikguly aganyň we käbesi Ogulabat ejäniň jaýynyň jennetde bolmagy dileg edildi.

                                Döwlet Baştutanymyz Serdar Berdimuhamedowyň 2022-nji ýylda Türkmenistanyň Prezidenti wezipesine girişen pursadyndan ilkinji daşary ýurt saparyny hut yslam dünýäsiniň mukaddes topragyna amala aşyrandygy we şol ýerde umra haj dessurlaryny berjaý edendigi bellärliklidir.

                                Şu ýyl döwletimiziň ýakyndan ýardam bermegi netijesinde, türkmen zyýaratçylarynyň 2,5 müňe golaýy ähli musulmanlar üçin mukaddes bolan Mekge we Medine şäherlerine baryp gördi. Şunda hajy Arkadagymyzyň asylly işlerinidir başlangyçlaryny mynasyp dowam etdirýän Arkadagly hajy Serdarymyzyň baştutanlygynda üstünlikli durmuşa geçirilýän Türkmenistanyň syýasy strategiýasynyň ileri tutulýan ugurlary öz aýdyň beýanyny tapýar.

                                Türkmenistanyň Ýakyn Gündogaryň beýleki ýurtlary, hususan-da, Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlar bilen gatnaşyklary ilkibaşdan dostluk, birek-birege hormat goýmak we ynanyşmak ýörelgeleri esasynda guralýar. Hormatly Prezidentimiziň şu ýyl, degişlilikde, Bahreýn Patyşalygyna, Katar Döwletine amala aşyran resmi we döwlet saparlary, şeýle hem Gahryman Arkadagymyzyň Birleşen Arap Emirliklerine resmi sapary bu ugurda netijeli hyzmatdaşlygy okgunly ösdürmekde möhüm ädim boldy.

                                Ýurdumyzyň Merkezi Aziýanyň döwletleri bilen gatnaşyklary taryhyň dowamynda emele gelen hoşniýetli goňşuçylyk, doganlyk, özara bähbitli hyzmatdaşlyk ýörelgelerine esaslanýar. Hormatly Prezidentimiz Serdar Berdimuhamedowyň şu ýylda Täjigistan Respublikasyna amala aşyran döwlet saparynyň netijeleri munuň aýdyň subutnamasydyr.

                                Şeýlelikde, döwlet Baştutanymyzyň öňde boljak maslahata gatnaşmagy ýurdumyzyň netijeli ikitaraplaýyn we köptaraplaýyn hyzmatdaşlygy ösdürmek, oňa täze itergi bermek, umumy abadançylygyň, durnukly ösüşiň bähbidine bar bolan ykdysady we ynsanperwer kuwwatdan netijeli peýdalanmak meselelerinde işjeň orny eýelemäge ygrarlydygynyň nobatdaky beýanydyr.
                            </p>


                        </div>
                        <span class="date">18.07.2023</span>
                    </div>
                </a>

                <a href="#" class="news_container flex_col">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_3.jpg') }}" alt="">
                    </div>
                    <div class="content_wrapper flex_col">
                        <div class="title">
                            Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygyna iş sapary bilen ugrady
                        </div>
                        <div class="description">
                            <p>
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň duşuşygyna gatnaşmak maksady bilen, Saud Arabystany Patyşalygyna iş saparyna ugrady. Jidda şäherinde geçiriljek ýokary derejedäki sammit umumy abadançylygyň hem-de ösüşiň bähbitlerine laýyk gelýän netijeli döwletara we sebitara hyzmatdaşlygy mundan beýläk-de ösdürmäge gönükdirilendir. Aşgabadyň Halkara howa menzilinde hormatly Prezidentimizi resmi adamlar ugratdylar.

                                Uçuşyň öňüsyrasynda howa menzilinde Saud Arabystany Patyşalygynyň ilçihanasynyň wekili bilen bolan söhbetdeşlikde ähli ugurlar boýunça okgunly ösýän ikitaraplaýyn gatnaşyklaryň dostlukly häsiýete eýedigi nygtaldy. Özara bähbitli söwda-ykdysady gatnaşyklar bilen birlikde, medeni-ynsanperwer hyzmatdaşlyga uly ähmiýet berilýär. Şeýle-de Türkmenistanyň we Saud Arabystany Patyşalygynyň abraýly halkara we sebit guramalarynyň hem-de düzümleriniň çäklerinde netijeli gatnaşyk edýändigi bellenildi. Şunuň bilen baglylykda, hormatly Prezidentimiz Serdar Berdimuhamedowyň şu saparynyň we Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň sammitine gatnaşmagynyň ikitaraplaýyn we köptaraplaýyn esasda hyzmatdaşlygy işjeňleşdirmäge ýardam etjekdigine ynam bildirildi.

                                Hormatly Prezidentimiziň uçary Jidda şäherine çenli uçuşy amala aşyryp, Aýlagdaky arap döwletleriniň we Merkezi Aziýa ýurtlarynyň Döwlet baýdaklary bilen bezelen Patyşa Abdulaziz adyndaky Halkara howa menziline gondy. Haly düşelen ýodajygyň ugrunda Hormat garawuly nyzama düzüldi. Howa menzilinde hormatly Prezidentimiz Serdar Berdimuhamedowy resmi adamlar mähirli garşyladylar.

                                Bu ýerde döwlet Baştutanymyzyň Saud Arabystany Patyşalygynyň resmi wekili bilen söhbetdeşligi boldy. Söhbetdeşligiň barşynda döwletara gatnaşyklaryň ýokary derejesi bellenildi hem-de iki ýurduň dostlukly gatnaşyklary we uly kuwwata eýe bolan özara bähbitli hyzmatdaşlygy hemmetaraplaýyn pugtalandyrmaga çalyşýandygy nygtaldy. Öňümizdäki maslahatyň köptaraply gatnaşyklary hil taýdan täze derejä çykarmak maksady bilen, tagallalary birleşdirmäge ýardam etjekdigine ynam bildirildi. Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygynyň mukaddes topragynda mähirli kabul edilendigi üçin minnetdarlyk bildirip, netijeli hyzmatdaşlygy giňeltmäge, onuň many-mazmunyny baýlaşdyrmaga mundan beýläk-de ýardam bermäge taýýardygyny belledi.

                                Döwlet Baştutanymyz howa menzilinden iş sapary döwründe özi üçin niýetlenen kabulhana tarap ugrady.

                                Ertir saparyň çäklerinde hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň maslahatyna gatnaşar. Onuň gün tertibine sebit derejesinde döwletara gatnaşyklaryň derwaýys meseleleri giriziler.

                                Türkmenistan parahatçylyk söýüjilik, oňyn Bitaraplyk we “Açyk gapylar” ýörelgelerine esaslanýan daşary syýasy ugry yzygiderli durmuşa geçirip, dünýäniň ähli ýurtlary, şol sanda arap dünýäsiniň döwletleri bilen deňhukukly, netijeli hyzmatdaşlygy ösdürmäge çalyşýar. Saud Arabystany Patyşalygy bilen däp bolan gatnaşyklar munuň aýdyň mysallarynyň biridir. Şol gatnaşyklar taraplaryň hoşmeýilli erk-islegi bilen berkidilendir.

                                Häzirki döwürde özara hormat goýmagyň we ynanyşmagyň berk binýadyna esaslanan türkmen-saud gatnaşyklary täze many-mazmuna eýe bolýar. Şunda taryhyň dowamynda emele gelen, özleriniň gadymy we parasatly däplerine ygrarlydygyny görkezýän iki doganlyk halky birleşdirýän ruhy-ahlak gymmatlyklarynyň umumylygy möhüm ähmiýete eýedir. Şeýle däpleriň biri haj parzyny berjaý etmek bilen baglanyşyklydyr. Türkmenistanda biziň ildeşlerimize köpasyrlyk ruhy däplere eýerip, yslamyň mukaddesliklerine baryp görmek üçin ähli şertler döredildi.

                                Şunuň bilen baglylykda, Gurban baýramynyň bellenilýän günlerinde — 29-30-njy iýunda türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň Saud Arabystany Patyşalygynda bolandygyny, şol ýerde Mekgede haj parzyny berjaý edendigini we gurbanlyk sadakasyny berendigini bellemek gerek. Gurbanlyk sadakasynda hajy Arkadagymyzyň pederi Mälikguly aganyň we käbesi Ogulabat ejäniň jaýynyň jennetde bolmagy dileg edildi.

                                Döwlet Baştutanymyz Serdar Berdimuhamedowyň 2022-nji ýylda Türkmenistanyň Prezidenti wezipesine girişen pursadyndan ilkinji daşary ýurt saparyny hut yslam dünýäsiniň mukaddes topragyna amala aşyrandygy we şol ýerde umra haj dessurlaryny berjaý edendigi bellärliklidir.

                                Şu ýyl döwletimiziň ýakyndan ýardam bermegi netijesinde, türkmen zyýaratçylarynyň 2,5 müňe golaýy ähli musulmanlar üçin mukaddes bolan Mekge we Medine şäherlerine baryp gördi. Şunda hajy Arkadagymyzyň asylly işlerinidir başlangyçlaryny mynasyp dowam etdirýän Arkadagly hajy Serdarymyzyň baştutanlygynda üstünlikli durmuşa geçirilýän Türkmenistanyň syýasy strategiýasynyň ileri tutulýan ugurlary öz aýdyň beýanyny tapýar.

                                Türkmenistanyň Ýakyn Gündogaryň beýleki ýurtlary, hususan-da, Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlar bilen gatnaşyklary ilkibaşdan dostluk, birek-birege hormat goýmak we ynanyşmak ýörelgeleri esasynda guralýar. Hormatly Prezidentimiziň şu ýyl, degişlilikde, Bahreýn Patyşalygyna, Katar Döwletine amala aşyran resmi we döwlet saparlary, şeýle hem Gahryman Arkadagymyzyň Birleşen Arap Emirliklerine resmi sapary bu ugurda netijeli hyzmatdaşlygy okgunly ösdürmekde möhüm ädim boldy.

                                Ýurdumyzyň Merkezi Aziýanyň döwletleri bilen gatnaşyklary taryhyň dowamynda emele gelen hoşniýetli goňşuçylyk, doganlyk, özara bähbitli hyzmatdaşlyk ýörelgelerine esaslanýar. Hormatly Prezidentimiz Serdar Berdimuhamedowyň şu ýylda Täjigistan Respublikasyna amala aşyran döwlet saparynyň netijeleri munuň aýdyň subutnamasydyr.

                                Şeýlelikde, döwlet Baştutanymyzyň öňde boljak maslahata gatnaşmagy ýurdumyzyň netijeli ikitaraplaýyn we köptaraplaýyn hyzmatdaşlygy ösdürmek, oňa täze itergi bermek, umumy abadançylygyň, durnukly ösüşiň bähbidine bar bolan ykdysady we ynsanperwer kuwwatdan netijeli peýdalanmak meselelerinde işjeň orny eýelemäge ygrarlydygynyň nobatdaky beýanydyr.
                            </p>


                        </div>
                        <span class="date">18.07.2023</span>
                    </div>
                </a>

                <a href="#" class="news_container flex_col">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_4.jpg') }}" alt="">
                    </div>
                    <div class="content_wrapper flex_col">
                        <div class="title">
                            Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygyna iş sapary bilen ugrady
                        </div>
                        <div class="description">
                            <p>
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň duşuşygyna gatnaşmak maksady bilen, Saud Arabystany Patyşalygyna iş saparyna ugrady. Jidda şäherinde geçiriljek ýokary derejedäki sammit umumy abadançylygyň hem-de ösüşiň bähbitlerine laýyk gelýän netijeli döwletara we sebitara hyzmatdaşlygy mundan beýläk-de ösdürmäge gönükdirilendir. Aşgabadyň Halkara howa menzilinde hormatly Prezidentimizi resmi adamlar ugratdylar.

                                Uçuşyň öňüsyrasynda howa menzilinde Saud Arabystany Patyşalygynyň ilçihanasynyň wekili bilen bolan söhbetdeşlikde ähli ugurlar boýunça okgunly ösýän ikitaraplaýyn gatnaşyklaryň dostlukly häsiýete eýedigi nygtaldy. Özara bähbitli söwda-ykdysady gatnaşyklar bilen birlikde, medeni-ynsanperwer hyzmatdaşlyga uly ähmiýet berilýär. Şeýle-de Türkmenistanyň we Saud Arabystany Patyşalygynyň abraýly halkara we sebit guramalarynyň hem-de düzümleriniň çäklerinde netijeli gatnaşyk edýändigi bellenildi. Şunuň bilen baglylykda, hormatly Prezidentimiz Serdar Berdimuhamedowyň şu saparynyň we Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň sammitine gatnaşmagynyň ikitaraplaýyn we köptaraplaýyn esasda hyzmatdaşlygy işjeňleşdirmäge ýardam etjekdigine ynam bildirildi.

                                Hormatly Prezidentimiziň uçary Jidda şäherine çenli uçuşy amala aşyryp, Aýlagdaky arap döwletleriniň we Merkezi Aziýa ýurtlarynyň Döwlet baýdaklary bilen bezelen Patyşa Abdulaziz adyndaky Halkara howa menziline gondy. Haly düşelen ýodajygyň ugrunda Hormat garawuly nyzama düzüldi. Howa menzilinde hormatly Prezidentimiz Serdar Berdimuhamedowy resmi adamlar mähirli garşyladylar.

                                Bu ýerde döwlet Baştutanymyzyň Saud Arabystany Patyşalygynyň resmi wekili bilen söhbetdeşligi boldy. Söhbetdeşligiň barşynda döwletara gatnaşyklaryň ýokary derejesi bellenildi hem-de iki ýurduň dostlukly gatnaşyklary we uly kuwwata eýe bolan özara bähbitli hyzmatdaşlygy hemmetaraplaýyn pugtalandyrmaga çalyşýandygy nygtaldy. Öňümizdäki maslahatyň köptaraply gatnaşyklary hil taýdan täze derejä çykarmak maksady bilen, tagallalary birleşdirmäge ýardam etjekdigine ynam bildirildi. Hormatly Prezidentimiz Serdar Berdimuhamedow Saud Arabystany Patyşalygynyň mukaddes topragynda mähirli kabul edilendigi üçin minnetdarlyk bildirip, netijeli hyzmatdaşlygy giňeltmäge, onuň many-mazmunyny baýlaşdyrmaga mundan beýläk-de ýardam bermäge taýýardygyny belledi.

                                Döwlet Baştutanymyz howa menzilinden iş sapary döwründe özi üçin niýetlenen kabulhana tarap ugrady.

                                Ertir saparyň çäklerinde hormatly Prezidentimiz Serdar Berdimuhamedow Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlaryň hem-de Merkezi Aziýa döwletleriniň Baştutanlarynyň maslahatyna gatnaşar. Onuň gün tertibine sebit derejesinde döwletara gatnaşyklaryň derwaýys meseleleri giriziler.

                                Türkmenistan parahatçylyk söýüjilik, oňyn Bitaraplyk we “Açyk gapylar” ýörelgelerine esaslanýan daşary syýasy ugry yzygiderli durmuşa geçirip, dünýäniň ähli ýurtlary, şol sanda arap dünýäsiniň döwletleri bilen deňhukukly, netijeli hyzmatdaşlygy ösdürmäge çalyşýar. Saud Arabystany Patyşalygy bilen däp bolan gatnaşyklar munuň aýdyň mysallarynyň biridir. Şol gatnaşyklar taraplaryň hoşmeýilli erk-islegi bilen berkidilendir.

                                Häzirki döwürde özara hormat goýmagyň we ynanyşmagyň berk binýadyna esaslanan türkmen-saud gatnaşyklary täze many-mazmuna eýe bolýar. Şunda taryhyň dowamynda emele gelen, özleriniň gadymy we parasatly däplerine ygrarlydygyny görkezýän iki doganlyk halky birleşdirýän ruhy-ahlak gymmatlyklarynyň umumylygy möhüm ähmiýete eýedir. Şeýle däpleriň biri haj parzyny berjaý etmek bilen baglanyşyklydyr. Türkmenistanda biziň ildeşlerimize köpasyrlyk ruhy däplere eýerip, yslamyň mukaddesliklerine baryp görmek üçin ähli şertler döredildi.

                                Şunuň bilen baglylykda, Gurban baýramynyň bellenilýän günlerinde — 29-30-njy iýunda türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň Saud Arabystany Patyşalygynda bolandygyny, şol ýerde Mekgede haj parzyny berjaý edendigini we gurbanlyk sadakasyny berendigini bellemek gerek. Gurbanlyk sadakasynda hajy Arkadagymyzyň pederi Mälikguly aganyň we käbesi Ogulabat ejäniň jaýynyň jennetde bolmagy dileg edildi.

                                Döwlet Baştutanymyz Serdar Berdimuhamedowyň 2022-nji ýylda Türkmenistanyň Prezidenti wezipesine girişen pursadyndan ilkinji daşary ýurt saparyny hut yslam dünýäsiniň mukaddes topragyna amala aşyrandygy we şol ýerde umra haj dessurlaryny berjaý edendigi bellärliklidir.

                                Şu ýyl döwletimiziň ýakyndan ýardam bermegi netijesinde, türkmen zyýaratçylarynyň 2,5 müňe golaýy ähli musulmanlar üçin mukaddes bolan Mekge we Medine şäherlerine baryp gördi. Şunda hajy Arkadagymyzyň asylly işlerinidir başlangyçlaryny mynasyp dowam etdirýän Arkadagly hajy Serdarymyzyň baştutanlygynda üstünlikli durmuşa geçirilýän Türkmenistanyň syýasy strategiýasynyň ileri tutulýan ugurlary öz aýdyň beýanyny tapýar.

                                Türkmenistanyň Ýakyn Gündogaryň beýleki ýurtlary, hususan-da, Aýlagdaky arap döwletleriniň hyzmatdaşlyk geňeşine agza ýurtlar bilen gatnaşyklary ilkibaşdan dostluk, birek-birege hormat goýmak we ynanyşmak ýörelgeleri esasynda guralýar. Hormatly Prezidentimiziň şu ýyl, degişlilikde, Bahreýn Patyşalygyna, Katar Döwletine amala aşyran resmi we döwlet saparlary, şeýle hem Gahryman Arkadagymyzyň Birleşen Arap Emirliklerine resmi sapary bu ugurda netijeli hyzmatdaşlygy okgunly ösdürmekde möhüm ädim boldy.

                                Ýurdumyzyň Merkezi Aziýanyň döwletleri bilen gatnaşyklary taryhyň dowamynda emele gelen hoşniýetli goňşuçylyk, doganlyk, özara bähbitli hyzmatdaşlyk ýörelgelerine esaslanýar. Hormatly Prezidentimiz Serdar Berdimuhamedowyň şu ýylda Täjigistan Respublikasyna amala aşyran döwlet saparynyň netijeleri munuň aýdyň subutnamasydyr.

                                Şeýlelikde, döwlet Baştutanymyzyň öňde boljak maslahata gatnaşmagy ýurdumyzyň netijeli ikitaraplaýyn we köptaraplaýyn hyzmatdaşlygy ösdürmek, oňa täze itergi bermek, umumy abadançylygyň, durnukly ösüşiň bähbidine bar bolan ykdysady we ynsanperwer kuwwatdan netijeli peýdalanmak meselelerinde işjeň orny eýelemäge ygrarlydygynyň nobatdaky beýanydyr.
                            </p>


                        </div>
                        <span class="date">18.07.2023</span>
                    </div>
                </a>
            </div>

        </div>
    </section>
</main>
@endsection