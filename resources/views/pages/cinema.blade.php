@extends('layouts.master')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/cinema.css') }}">
@endpush


@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="cinema">
    <div class="image-slider">
        <div class="container">
            <h1>Major Aeon Mall Phnom Penh</h1>
            <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
            <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                <a href="{{url('/login')}}">
                <button class="btn-slider">BUY NOW</button>
                </a>
            </div>
        </div>
    </div>
    <div class="container-cinema">
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL PHNOM PENH</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 888 126</p>
                <div class="slider-cinema">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>

            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PHNOM PENH AEON 2</h3>
                <p>Street 1003, Phnom Penh (Aeon Mall Sen Sok) Aeon Sen Sok</p>
                <p>087 901 000</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>

                </div>

            </div>

        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PHNOM PENH SORYA</h3>
                <p>#13-61, Street 63, Sangkat Phsar Thmei 1,Khan Daun Penh Phnom Penh (Sorya Center Point)</p>
                <p>087 666 210</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR PLATINUM SIEM REAP</h3>
                <p>Stung Thmey Village Svay Dongkom District Siem Reap City Siem Reap Province</p>
                <p>081 666 210</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR BIG C POIPET</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>097 687 1049</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL KAMPOT</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 889 345</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>
            </div>
        </div>
        <div class="cinema-card">
            <div class="cinema-img">
                <img src="img/major-cinema.png">
            </div>
            <div class="content">
                <h3>MAJOR AEON MALL KANDAL</h3>
                <p>#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)</p>
                <p>098 888 123</p>
                <div class="btb">
                <a href="{{url('/movie')}}">
                    <button class="btn-slider">MORE INFO</button>
                </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection