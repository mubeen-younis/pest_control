@extends('layouts.main')
@section('main-container')
    <div class="other-side">
        <div class="search-area">
            <div class="other-option">
                <div class="search-item">
                    <a href="#" class="search-btn">
                        <i class="flaticon-loupe"></i>
                    </a>
                    <i class="close-btn bx bx-x"></i>
                    <div class="search-overlay search-popup">
                        <div class="search-box">
                            <form class="search-form">
                                <input class="search-input" name="search" placeholder="Search" type="text">
                                <button class="search-button" type="submit">
                                    <i class="flaticon-loupe"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-menu">
            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
                <i class="flaticon-menu"></i>
            </a>
        </div>
    </div>
    </div>
    </nav>
    </div>
    </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="bx bx-x"></i>
                            </span>
                        </button>
                        <h2 class="modal-title" id="myModalLabel2">
                            <a href="index.html">
                                <img src="assets/img/logo.png" class="modal-logo1" alt="Logo">
                                <img src="assets/img/sticky-logo.png" class="modal-logo2" alt="Logo">
                            </a>
                        </h2>
                    </div>

                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum
                                laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore
                                voluptate, autem pariatur.</p>
                        </div>
                        <div class="sidebar-modal-widget">
                            <h3 class="title">Additional Links</h3>
                            <ul>
                                <li>
                                    <a href="log-in.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="sign-up.html">Sign Up</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">Contact Info</h3>
                            <ul class="contact-info">
                                <li>
                                    <i class='flaticon-pin'></i>
                                    Address
                                    <span>28/A Street, New York, USA</span>
                                </li>
                                <li>
                                    <i class="flaticon-paper-plane"></i>
                                    Email
                                    <span>info@bonsa.com</span>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    Phone
                                    <span>+1 123 456 7890, +1 123 454 699</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">Connect With Us</h3>
                            <ul class="social-list">
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Banner Another -->
    <div class="banner-another">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text banner-ptb">
                        <span>{{ $generalSetting->title }}</span>
                        <h1 class="head-width">{{ $generalSetting->subtitle }}</h1>
                        <p>
                            {{ $generalSetting->paragraph }}
                        </p>

                        <div class="banner-btn">
                            <a href="contact.html" class="default-btn">{{ $generalSetting->button_left }}</a>
                            <a href="#" class="default-btn active">{{ $generalSetting->button_right }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img-3">
                        <img class="banner_img" src="{{ asset('storage/'.$generalSetting->banner_image) }}" alt="Banner Images">
                        <div class="banner-img-shape">
                            <img src="assets/img/shape/shape-home3.png" alt="Banner Shape">
                        </div>
                        <div class="banner-social-icon">
                            <a href="#" class="banner-icon-tag banner-icon1">
                                <img src="assets/img/shape/youtube.svg" alt="Youtube">
                            </a>
                            <a href="#" class="banner-icon-tag banner-icon2">
                                <img src="assets/img/shape/pinterest.svg" alt="Pinterest">
                            </a>
                            <a href="#" class="banner-icon-tag banner-icon3">
                                <img src="assets/img/shape/twitter.svg" alt="Twitter">
                            </a>
                            <a href="#" class="banner-icon-tag banner-icon4">
                                <img src="assets/img/shape/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
                <img src="assets/img/shape/1.png" alt="shape">
            </div>
            <div class="shape2">
                <img src="assets/img/shape/2.png" alt="shape">
            </div>
            <div class="home-shape3">
                <img src="assets/img/shape/3.png" alt="shape">
            </div>
            <div class="home-shape4">
                <img src="assets/img/shape/4.png" alt="shape">
            </div>
            <div class="home-shape5">
                <img src="assets/img/shape/2.png" alt="shape">
            </div>
            <div class="home-shape6">
                <img src="assets/img/shape/6.png" alt="shape">
            </div>
            <div class="shape7">
                <img src="assets/img/shape/3.png" alt="shape">
            </div>
            <div class="home-shape8">
                <img src="assets/img/shape/5.png" alt="shape" width="25px">
            </div>
        </div>
    </div>
    <!-- Banner Another End -->

    <!-- Brand Area -->
    {{-- <div class="brand-area">
        <div class="container">
            <div class="brand-title">
                <span>Our Partners</span>
                <h2>People Who Worked With Us </h2>
            </div>

            <div class="brand-slider owl-carousel owl-theme">


                @foreach ($companyLogo as $companyLogos)
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('storage/' . $companyLogos->image) }}" alt="Brand Images">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div> --}}
    <!-- Brand Area End -->

    <!-- Service Area -->
    <section class="service-area pt-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Service</span>
                <h2>We Provide Fastest & Unique Business Growing Service</h2>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="row pt-45">

                @foreach ($manageServices as $service)

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img class="service_img" src="{{ asset('storage/'.$service->icon) }}" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ $service->title }}</h3>
                        </a>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

        <div class="service-shape1">
            <img src="assets/img/shape/right-side.png" alt="Shape Images">
        </div>
    </section>
    <!-- Service Area End -->

    <!-- About Area -->
    <div class="about-area about-max ptb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6">
                    <div class="about-img about-ml">
                        <img src="{{ asset('storage/'.$manageAboutUs->image) }}" alt="About Images">
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span>About Us</span>
                        <h2>{{ $manageAboutUs->title }}</h2>
                        <p>
                            {{ $manageAboutUs->description }}
                        </p>


                        <div class="about-btn">
                            <a href="#" class="default-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Price Area -->
    <div class="price-area bg-price pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Pricing Table</span>
                <h2>We Have Pre-ready Pricing for Our Services</h2>
                <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-45">
                    <div class="tabs-item-list">
                        <ul id="tabs-item" class="text-center">
                            <li class="active">
                                <a href="#monthly" class="prices-tab">Monthly</a>
                            </li>
                            <li>
                                <a href="#yearly" class="prices-tab">Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="prices-content">
                <div id="monthly" class="active prices-content-area animated">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price">
                                <span>Basic Plan</span>

                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $monthlyBasic->price }}<sub>/month</sub></h2>
                                </div>

                                @foreach ($monthlyBasicService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price current">
                                <span>Standard Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $monthlyStandard->price }}<sub>/month</sub></h2>
                                </div>

                                @foreach ($monthlyStandardService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                            <div class="single-price">
                                <span>Premium Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $monthlyPremium->price }}<sub>/month</sub></h2>
                                </div>

                                @foreach ($monthlyPremiumService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="yearly" class="animated prices-content-area">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price">
                                <span>Basic Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $yearlyBasic->price }}<sub>/year</sub></h2>
                                </div>

                                @foreach ($yearlyBasicService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="single-price current">
                                <span>Standard Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $yearlyStandard->price }}<sub>/year</sub></h2>
                                </div>

                                @foreach ($yearlyStandardService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                            <div class="single-price">
                                <span>Premium Plan</span>
                                <div class="single-price-title">
                                    <h2><sup>$</sup>{{ $yearlyPremium->price }}<sub>/year</sub></h2>
                                </div>

                                @foreach ($yearlyPremiumService as $service)
                                <ul>
                                    <li>{{ $service->service }}</li>

                                </ul>
                                @endforeach
                                <a href="#" class="get-btn">Get Stated</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price Area End -->

    <!-- Portfolio Area -->
    <section class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Portfolio</span>
                <h2>{{ $managingPortfolio->title }}</h2>
                <p>
                   {{ $managingPortfolio->description }}
                </p>
            </div>
            <div class="row pt-45">

                @foreach ($managePortfolio as $portfolio)


                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.html">
                                <img class="portfolio_img" src="{{ ('storage/'.$portfolio->image) }}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>{{ $portfolio->category }}</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.html">
                                    <h3>{{ $portfolio->service }}</h3>
                                </a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Member Area -->
    <div class="member-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Expert Members</span>
                <h2>Behind the Great Success of Bonsa They Playing Role</h2>
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="row pt-45">

                @foreach ($manageMembers as $member)


                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img class="member_img" src="{{ ('storage/'.$member->image) }}" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>{{ $member->name }}</h3>
                                </a>
                                <span>{{ $member->designation }}</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
        <div class="member-shape-2">
            <img src="assets/img/shape/member-shape-2.png" alt="Members Images">
        </div>
    </div>
    <!-- Member Area End -->

    <!-- Client Area -->
    <div class="client-area pb-70">
        <div class="container-fluid p-0">
            <div class="section-title text-center">
                <span>Testimonial</span>
                <h2>Our Clients Feedback</h2>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>
            </div>


            <div class="client-slider owl-carousel owl-theme">

                @foreach ($clientFeedback as $feedback)

                <div class="client-item">
                    <div class="client-item-img">
                        <img class="Testimonial_img" src="{{ asset('storage/'.$feedback->image) }}" alt="Testimonial Images">
                    </div>
                    <h3>{{ $feedback->name }}</h3>
                    <p>
                        {{ $feedback->feedback }}
                    </p>
                </div>
                @endforeach


            </div>

        </div>
    </div>
    <!-- Client Area End -->

    <!-- Blog Area -->
    <div class="blog-area pb-70">
        <div class="container">



            <div class="section-title text-center">
                <span>Blogs</span>
                <h2>Our Latest Post</h2>
                <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at its layout.
                </p>
            </div>


            <div class="row pt-45">

                @foreach ($blogs as $blog)

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img class="blog_img" src="{{ ('storage/'.$blog->photo) }}" alt="Blog Images">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span>{{ $blog->category }}</span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3>{{ $blog->title }}</h3>
                            </a>
                            <a href="blog-details.html" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Submission Area -->
    <div class="submission-area ptb-100">
        <div class="container">
            <div class="submission-title">
                <h2>Know Your Website Ranking</h2>
            </div>
            <form class="submission-form">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="website" placeholder="Your website">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group border-line">
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                        <button type="submit" class="default-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Submission Area End -->
@endsection
