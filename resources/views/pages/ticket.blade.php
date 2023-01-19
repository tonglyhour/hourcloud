@extends('layouts.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ticket.css') }}">
@endpush


@section('header')
    
@endsection


@section('content')
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @isset($orders)
        @foreach ($orders as $order)
            <div class="ticket">
                <div class="top">
                </div>
                <div class="bottom">
            
                    <h1>{{ $order->movie_title }}</h1>
                    <div class="detail">
                        <p>Genre: {{ $order->movie_genre }}</p>
                        <p>Duration: {{ $order->movie_duration }}</p>
                        <p>Price: 4$</p>
                        <p>Seat: 28</p>
                    </div>
                    <div class="datetime">
                        <div class="date">{{ $order->movie_date }}</div>
                    </div>
                        
                </div>
                <div class="btn-groups">
            
                    <a class="btn btn-warning btn-confirm" href="/movie/{{ $order->movie_id }}">Confirm</a>
                    <a class="btn btn-light" href="/">Cancel</a>

                </div>
            </div>
        @endforeach
    @endisset
@endsection



@section('footer')
    
@endsection


@push('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    {{-- <script type="text/javascript" src="{{ asset('/js/ticket.js') }}"></script> --}}
@endpush