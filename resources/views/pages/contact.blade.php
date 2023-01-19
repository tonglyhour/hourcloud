@extends('layouts.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
@endpush


@section('header')
    @include('layouts.header')
@endsection


@section('content')
<form method="post" >
  @csrf
    <div class="title">
      <h2>CONTACT US</h2>
    </div>
    <div class="half">
      <div class="item">
        <label for="name">NAME</label>
        <input type="text" name="name" id = "name">
      </div>
      <div class="item">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id = "email">
      </div>
      
    </div>
    <div class="full">
      <label for="message">MESSAGE</label>
      <textarea name="msg" id = "message"></textarea>
    </div>
    <div class="action">
      <input type="submit" value = "SEND MESSAGE">
      <input type="reset" value = "RESET">
    </div>
    <div class="icons">
      <a href="" class = "fa fa-facebook"></a>
      <a href="" class = "fa fa-instagram"></a>
    
    </div>
  </form>
@endsection



@section('footer')
    @include('layouts.footer')
@endsection


@push('js')
    <script type="text/javascript" src="{{ asset('/js/movie.js') }}"></script>
@endpush