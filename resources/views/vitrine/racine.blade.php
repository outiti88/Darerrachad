<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{ url('/vitrine/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Mobile Menu -->
        <link href="{{ url('/vitrine/css/mmenu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/vitrine/css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="{{ url('/vitrine/style.css')}}"  rel="stylesheet" type="text/css" />

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('/images/logo.png') }}" />
    @yield('style')
</head>

<body>
         <!-- Start: Header Section -->

         @include('vitrine.partiels._navbar')
        <!-- End: Social Network -->
        @yield('content')
        @include('vitrine.partiels._footer')

    <!-- container-scroller -->
        <!-- jQuery Latest Version 1.x -->

        <script type="text/javascript" src="{{ url('/vitrine/js/jquery-1.12.4.min.js') }}"></script>
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{ url('/vitrine/js/jquery-ui.min.js') }}"></script>

        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{ url('/vitrine/js/jquery.easing.1.3.js') }}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ url('/vitrine/js/bootstrap.min.js') }}"></script>

        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{ url('/vitrine/js/mmenu.min.js') }}"></script>

        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{ url('/vitrine/js/harvey.min.js') }}"></script>

        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{ url('/vitrine/js/waypoints.min.js') }}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{ url('/vitrine/js/facts.counter.min.js') }}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{ url('/vitrine/js/mixitup.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ url('/vitrine/js/owl.carousel.min.js') }}"></script>

        <!-- Accordion -->
        <script type="text/javascript" src="{{ url('/vitrine/js/accordion.min.js') }}"></script>

        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{ url('/vitrine/js/responsive.tabs.min.js') }}"></script>

        <!-- Responsive Table -->
        <script type="text/javascript" src="{{ url('/vitrine/js/responsive.table.min.js') }}"></script>

        <!-- Masonry -->
        <script type="text/javascript" src="{{ url('/vitrine/js/masonry.min.js') }}"></script>

        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{ url('/vitrine/js/carousel.swipe.min.js') }}"></script>

        <!-- bxSlider -->
        <script type="text/javascript" src="{{ url('/vitrine/js/bxslider.min.js') }}"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{ url('/vitrine/js/main.js') }}"></script>

        @yield('javascript')


</body>


</html>
