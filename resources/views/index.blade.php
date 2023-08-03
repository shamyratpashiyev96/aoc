@extends('layout', ['title' => __('app.layout.main_page')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

@section('content')

<main class="flex_col">
    <div class="main__banner_wrapper flex_row">
        <img src="{{ asset('img/banner_main.jpg') }}" alt="">
        <div class="main__upper_layer">
            
            <div class="main__logo_wrapper_1">
                <span>@lang('app.main_page.banner_text_1')</span>
            </div>

            <div class="main__logo_wrapper_2 flex_row">
                <img src="{{ asset('icons/logo_banner.svg') }}" alt="">
                <span>@lang('app.main_page.banner_text_2')</span>
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
                            @lang('app.main_page.flipcard_1.title')
                        </span>
                    </div>

                    <div class="flipcards__back_side">
                        <img src="{{ asset('img/flip_card_1.jpg') }}" alt="">
                        <h2 class="flipcards__flipcard_title">@lang('app.main_page.flipcard_1.title')</h2>
                        <div class="flipcards__flipcard_description">
                            @lang('app.main_page.flipcard_1.desc')
                        </div>
                    </div>
                </div>
            </div>

            <div class="flipcards__flipcard_container">
                <div class="flipcards__flipcard_inner_wrapper">
                    <div class="flipcards__front_side">
                        <img src="{{ asset('img/flip_card_2.jpg') }}" alt="">
                        <span class="flipcards__flipcard_title">
                            @lang('app.main_page.flipcard_2.title')
                        </span>
                    </div>

                    <div class="flipcards__back_side">
                        <img src="{{ asset('img/flip_card_2.jpg') }}" alt="">
                        <h2 class="flipcards__flipcard_title">@lang('app.main_page.flipcard_2.title')</h2>
                        <div class="flipcards__flipcard_description flex_row">
                            @lang('app.main_page.flipcard_2.desc')
                        </div>
                    </div>
                </div>
            </div>

            <div class="flipcards__flipcard_container">
                <div class="flipcards__flipcard_inner_wrapper">
                    <div class="flipcards__front_side">
                        <img src="{{ asset('img/flip_card_3.jpg') }}" alt="">
                        <span class="flipcards__flipcard_title">
                            @lang('app.main_page.flipcard_3.title')
                        </span>
                    </div>

                    <div class="flipcards__back_side">
                        <img src="{{ asset('img/flip_card_3.jpg') }}" alt="">
                        <h2 class="flipcards__flipcard_title">@lang('app.main_page.flipcard_3.title')</h2>
                        <div class="flipcards__flipcard_description flex_col">
                            @lang('app.main_page.flipcard_3.desc')
                        </div>
                    </div>
                </div>
            </div>

            <div class="flipcards__flipcard_container">
                <div class="flipcards__flipcard_inner_wrapper">
                    <div class="flipcards__front_side">
                        <img src="{{ asset('img/flip_card_4.jpg') }}" alt="">
                        <span class="flipcards__flipcard_title">
                            @lang('app.main_page.flipcard_4.title')
                        </span>
                    </div>

                    <div class="flipcards__back_side">
                        <img src="{{ asset('img/flip_card_4.jpg') }}" alt="">
                        <h2 class="flipcards__flipcard_title">@lang('app.main_page.flipcard_4.title')</h2>
                        <div class="flipcards__flipcard_description flex_col">
                            @lang('app.main_page.flipcard_4.desc')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_us flex_row" id="about_us_section">
        <div class="about_us__inner_wrapper flex_col">
            <h2 class="about_us__title">@lang('app.main_page.about_us_section.title')</h2>
            <div class="about_us__images_row flex_row">
                <img src="{{ asset('img/about_us_1.jpg') }}" alt="">
                <img src="{{ asset('img/about_us_2.jpg') }}" alt="">
                <img src="{{ asset('img/about_us_3.jpg') }}" alt="">
            </div>
            <div class="about_us__text_block">
                @lang('app.main_page.about_us_section.desc')
            </div>
        </div>
    </section>

    <section class="gallery flex_row" id="gallery_section">
        <div class="gallery__inner_wrapper flex_col">
            <h2 class="gallery__title">@lang('app.main_page.gallery_section')</h2>
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
            <h2 class="news__section_title">@lang('app.main_page.news_section')</h2>
            <div class="news__news_row flex_row">
                @foreach ($news_4 as $news)
                    <a href="{{ route('single_news_page',['id'=>$news->id, 'lang'=>app()->getLocale()]) }}" class="news_container flex_col">
                        <div class="image_wrapper">
                            <img src="{{ asset($news->image) }}" alt="">
                        </div>
                        <div class="content_wrapper flex_col">
                            <div class="title">
                                {{ $news->{'title_' . app()->getLocale()} }}
                            </div>
                            <div class="description">
                                {!! $news->{'description_' . app()->getLocale()} !!}
                            </div>
                            <span class="date">{{ date('d.m.Y', strtotime($news->created_at)) }}</span>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>
    </section>
</main>
@endsection