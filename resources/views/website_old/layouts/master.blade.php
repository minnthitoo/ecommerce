<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" type="text/css">
</head>

<body>

    @include('website.layouts.website_navbar')

    @yield('slidebar')


    @yield('content')

    @include('website.layouts.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('website/js/jquery-3.3.1.min.js') }}">
    </script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('website/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>


</body>

</html>
