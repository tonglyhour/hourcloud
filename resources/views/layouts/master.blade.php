<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Movie card</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- icon -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Vendor CSS Files -->

        <link rel="stylesheet" href="{{ asset('/public/vendor/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/boxicons/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/remixicon/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/vendor/swiper/swiper-bundle.min.css') }}">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('/css/master.css') }}">
        @stack('css')
    </head>
    <body>
    
    @yield('header');
    @yield('content');
    @yield('footer');
    @stack('js')


    <script src="{{ asset('/public/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/public/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

    </body>
</html>