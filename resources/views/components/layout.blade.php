<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <script src="{{ asset('frontend/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{ asset('frontend/js/easing.js')}}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.simpleTicker.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{ $slot }}
</body>
</html>
