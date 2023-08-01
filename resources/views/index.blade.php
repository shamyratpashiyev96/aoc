@extends('layout')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

    <main>
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
        
        <div class="main__inner_wrapper">

        </div>
    </main>
@endsection