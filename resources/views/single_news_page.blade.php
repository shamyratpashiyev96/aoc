@extends('layout',['title' => __('app.layout.news_page')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_news_page.css') }}">
@endpush
@section('content')
<main class="single_news_page flex_row">
    <div class="single_news_page__inner_wrapper flex_col">
        <div class="single_news_page__breadcrumbs_row">
            <a href="{{ route('main_page', ['lang'=>app()->getLocale()]) }}">@lang('app.layout.main_page')</a>
            <span>&nbsp;>&nbsp;</span>
            <a href="{{ route('news_page', ['lang'=>app()->getLocale()]) }}">@lang('app.layout.news_page')</a>
            <span>&nbsp;>&nbsp;</span>
            <a href="{{ request()->fullUrl() }}">{{ Str::limit($selected_news->{'title_' . app()->getLocale()}, $limit = 50, $end = '...') }}</a>
        </div>
        <div class="single_news_page__page_content_row flex_row">
            <div class="single_news_page__news_content_column flex_col">

                <div class="single_news_page__image_wrapper">
                    <img src="{{ asset($selected_news->image) }}" alt="">
                </div>

                <div class="single_news_page__news_text_block">
                    <span class="single_news_page__news_date">{{ date('d.m.Y', strtotime($selected_news->event_date)) }}</span>
                    <h2 class="single_news_page__news_title">
                        {{ $selected_news->{'title_' . app()->getLocale()} }}
                    </h2>
                    <div class="single_news_page__news_description">
                        {!! $selected_news->{'description_' . app()->getLocale()} !!}
                    </div>
                </div>
                

            </div>

            <div class="single_news_page__similar_news_column flex_col">
                <h2 class="single_news_page__similar_news_block_title">
                    Похожие новости
                </h2>

                @foreach ($related_news as $news)
                    <a href="{{ route('single_news_page', ['lang'=>app()->getLocale(), 'id'=> $news->id]) }}" class="single_news_page__similar_news_container flex_col">
                        <span class="single_news_page__similar_news_date">{{ date('d.m.Y', strtotime($news->created_at)) }}</span>
                        <span class="single_news_page__similar_news_title">
                            {{ $news->{'title_' . app()->getLocale()} }}
                        </span>
                    </a>
                @endforeach

                
            </div>
        </div>

    </div>
</main>
@endsection