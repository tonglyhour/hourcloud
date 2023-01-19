@extends('layouts.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/movie.css') }}">
@endpush


@section('header')
    @include('layouts.header')
@endsection


@section('content')
    <section class="movie-wrap">
        <div class="slider-container">
            
            <div class="slides">

                <!-- Radio Buttons Start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- Radio Buttons End -->
                

                <!-- Slide Pic Start -->
                <div class="slide first">
                    <img src="img/slider1.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="img/slider2.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="img/slider3.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/slider4.jpeg" alt="">
                </div>
                <!-- Slide Pic End -->


                <!-- Automatic Navigation Start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- Automatic Navigation End -->
                
            </div>


            <!-- Manual Navigation Start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- Manual Navigation End -->

        </div>

        <!-- Movie Aired Start -->
        <ul class="show-type-container">
            <li class="show-type tab-active" id="show1">NOW SHOWING</li>
            <li class="show-type" id="show2">COMING SOON</li>
            <li class="show-type" id="show3">4DX</li>
            <li class="show-type" id="show4">KIDS CINEMA</li>
        </ul>
        <!-- Movie Aired End -->


        <!-- Movie List Start -->
        <div class="movie-container">
            @isset($movies)
                @foreach ($movies as $movie)
                    <div class="movie-item {{ $movie->movie_type }}" id="{{ $movie->movie_type }}">
                        <div class="movie-card">
                            <img src="{{ $movie->movie_img }}" alt="">
                            <ul class="movie-info">
                                <li><p class="title">{{ $movie->movie_title }}</p></li>
                                <li><i class="fas fa-tag"></i><p class="genre">{{ $movie->movie_genre }}</p></li>
                                <li><i class="fas fa-clock"></i><p class="hour">{{ $movie->movie_duration }}</p></li>
                                <li><i class="fas fa-calendar-alt"></i><p class="date">{{ $movie->movie_date }}</p></li>
                            </ul>
                        </div>
                        <a class="btn book-btn" id="{{ $movie->movie_id }}" href="/ticket/{{ $movie->movie_id }}">BOOK NOW</a>
                    </div>
                @endforeach
            @endisset

        </div>
        <!-- Movie List End -->
    </section>
@endsection



@section('footer')
    @include('layouts.footer')
@endsection


@push('js')
    <script type="text/javascript" src="{{ asset('/js/movie.js') }}"></script>
@endpush