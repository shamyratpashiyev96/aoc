@extends('layout',['title' => __('app.layout.news_page')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/news_page.css') }}">
@endpush
@section('content')
    
<main class="news_page flex_row">
    <div class="news_page__inner_wrapper">
        <h2 class="news_page__title">Новости</h2>

        <div class="news_page__news_row flex_row">
            @foreach ($news_current_page as $news)
                <a href="{{ route('single_news_page',['lang'=>app()->getLocale(),'id'=>$news->id]) }}" class="news_container flex_col">
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

        <div class="pagination_row flex_row">
            <a class="flex_row" style="align-items: center;" href="{{ route('news_page', ['page_num' => $prev_page,'lang'=>app()->getLocale()]) }}">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.3 12.8602L14.3 18.8602C14.5 19.0602 14.7 19.1602 15 19.1602C15.3 19.1602 15.5 19.0602 15.7 18.8602C16.1 18.4602 16.1 17.8602 15.7 17.4602L10.4 12.1602L15.7 6.86016C16.1 6.46016 16.1 5.86016 15.7 5.46016C15.3 5.06016 14.7 5.06016 14.3 5.46016L8.3 11.4602C7.9 11.8602 7.9 12.4602 8.3 12.8602Z" fill="black"/>
                </svg>
            </a>

            @foreach ($pagination_array as $page)
                @if($page == '...')
                    <span class="item">{{ $page }}</span>
                @else
                    <a href="{{ route('news_page', ['page_num' => $page,'lang'=>app()->getLocale()]) }}" class="item @if($current_page == $page) active @endif">{{ $page }}</a>
                @endif
            @endforeach

            <a class="flex_row" style="align-items: center;" href="{{ route('news_page', ['page_num' => $next_page,'lang'=>app()->getLocale()]) }}">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7 12.8602L9.7 18.8602C9.5 19.0602 9.3 19.1602 9 19.1602C8.7 19.1602 8.5 19.0602 8.3 18.8602C7.9 18.4602 7.9 17.8602 8.3 17.4602L13.6 12.1602L8.3 6.86016C7.9 6.46016 7.9 5.86016 8.3 5.46016C8.7 5.06016 9.3 5.06016 9.7 5.46016L15.7 11.4602C16.1 11.8602 16.1 12.4602 15.7 12.8602Z" fill="black"/>
                </svg>
            </a>

        </div>
    </div>
</main>

@endsection