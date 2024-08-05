<!doctype html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.carousel.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/magnific-popup.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/animate.min.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/fonts/flaticon.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/meanmenu.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/responsive.css') }}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/theme-dark.css') }}">

    <!-- Title -->
    <title>Bonsa - SEO & Marketing Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/frontend-assets/img/favicon.png') }}">
</head>

<body>
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('frontend-assets/img/logo.png') }}" class="logo-one" alt="Logo">
                <img src="{{ asset('frontend-assets/img/sticky-logo.png') }}" class="logo-two" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav top-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">





                    <a class="navbar-brand-sticky" href="index.html">
                        <img src="{{ asset('storage/'.\App\Models\generalSetting::first()->logo) }}" alt="Logo" width="70" height="50">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">




                            @foreach ($navItem as $item)
                                @if (count($item->subnav) > 0)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" id="nav_color" >
                                            {{ $item->name }}
                                            <i class='bx bxs-chevron-right'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                @foreach ($item->subnav as $subnav)
                                                <a href="{{ $subnav->link }}" class="nav-link">
                                                    {{ $subnav->name }}
                                                </a>
                                                @endforeach

                                            </li>

                                        </ul>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ $item->link }}">{{ $item->name }}</a>
                                </li>
                                @endif
                            @endforeach





                            {{--  pages  --}}




                        </ul>
