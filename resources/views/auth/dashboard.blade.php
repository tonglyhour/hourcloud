@extends('layouts.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
@endpush


@section('header')
    @include('layouts.header')
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>



<br>
<br>

<br>
<br>
<br>
<br>

    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-9" style="margin: top 20px;">
            
            <hr>
            <table class="table">
                <h4 class="text-warning">Welcome to Major Cineplex</h4>
                <thead>
                <tbody class="text-light">
                    <th>Name</th>
                    <th>Email</th>
                </tbody>
                </thead>
                <tbody class="text-light">
                    <tr>
                        <td>{{$data->name}}</td>
                        <br>
                        <td>{{$data->email}}</td>
                    </tr>
                </tbody>

              
            </table>
            <a href="logout" class="btn btn-warning">LOG OUT</a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br><br>
<br>
<br>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

@section('footer')
    @include('layouts.footer')
@endsection


