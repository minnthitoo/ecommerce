<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('merchant/css/font-face.css" rel="stylesheet') }}" media="all">
    <link href="{{ asset('merchant/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('merchant/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('merchant/endor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('merchant/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('merchant/css/theme.css') }}" rel="stylesheet" media="all">

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Tiny -->
    <script src="https://cdn.tiny.cloud/1/p8y3t5iua1jnsoehqxcrc4vg8svmcvlo3kwrw07qfl7do50x/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        {{-- side bar and mobile nav  --}}
        @include('merchant.layouts.sidebar')

        <!-- PAGE CONTAINER-->
        <div class=" page-container">
            <!-- HEADER DESKTOP-->
            @include('merchant.layouts.nav')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('merchant/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('merchant/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('merchant/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('merchant/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('merchant/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('merchant/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('merchant/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('merchant/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('merchant/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
