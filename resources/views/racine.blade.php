<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quickoo Delivery Tanger propose 
    un service de collecte, de stockage, d’emballage et d’expédition de vos produits aux clients.">
    <meta name="author" content="Outiti Ayoub">
    <meta name="keywords" content="Quickoo,Delivery,Tanger,Livraison,Expédition,Collecte">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/images/favicon.png')}}">
    <title>@yield('title')</title>

    <link href="{{ url('/sass/style.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    <link href="{{ url('/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">

    @yield('style')


</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('partiels._navbar')

        @include('partiels._sidebar')

        <div class="page-wrapper">

            @yield('content')
            <footer class="footer text-center">
                Copyright © 2020 Quickoo Delivery. Tous les droits sont réservés.
            </footer>
        </div>

    </div>

    <script>
        var xx = document.getElementById("secteur");
        function myFunction() {
        var test = document.getElementById("ville").value;
        if(test=='Tanger'){
            xx.style.display = "block";
        }
        else{
            xx.style.display = "none";
        }
        }
    </script>

    <script>
        var yy = document.getElementById("montant");
        function myFunction2(mode) {
            if(mode == 'cd'){
                yy.style.display = "block";
                console.log("cd");
            }
            else{
                yy.style.display = "none";
                console.log("cp");
            }
        }
    </script>
    
 

    <script src="{{ url('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/app-style-switcher.js') }}" ></script>
    <!--Wave Effects -->
    <script src="{{ url('/js/waves.js"') }}" ></script>
    <!--Menu sidebar -->
    <script src="{{ url('/js/sidebarmenu.js') }}" ></script>
    <!--Custom JavaScript -->
    <script src="{{ url('/js/custom.js') }}" ></script>

    @yield('javascript')
</body>

</html>