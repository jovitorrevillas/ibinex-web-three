<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ibinex - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48" href="{{ asset('img/favicon.ico') }}"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/swiper.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/normalize.css") }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/slick.css") }}"/>

    <!-- Global CSS -->
    {{--custom stylesheet--}}
    <link href="{{ asset("css/global.css") }}" rel="stylesheet"/>
    @stack('stylesheets')
</head>
<body>
@include('layouts.header')
<main>
    @yield('content')
</main>
@include('layouts.footer')

{{--scripts--}}
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script type="application/javascript" src="{{ asset("js/app.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/slick.js") }}"></script>
<!-- Header Scripts -->
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').on('click', function () {
            $('.offcanvas-collapse').toggleClass('open')
          });
        $('.autoplay-mobile').slick({
          slidesToShow: 7,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 7
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 6
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2
                }
            }
            ]
        });
    });
    </script>
@stack('scripts')

</body>
</html>
