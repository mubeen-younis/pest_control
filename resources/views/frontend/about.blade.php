@extends('layouts.main')
@section('main-container')

                            <div class="menu-btn">
                                <a href="#" class="seo-btn">SEO Score</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>About Us</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area -->
        <div class="about-area about-max pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img about-ml">
                            <img src="assets/img/about/about1.jpg" alt="About Images">
                        </div>
                    </div>

                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content about-width">
                            <span>About Us</span>
                            <h2>We Are Helping People to Reach Their Customer Since 2005</h2>
                            <p>
                                It is a long established fact that a reader will be distracted 
                                by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                            </p>
                            <p>
                                As opposed to using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages and web 
                                page editors now use Lorem Ipsum as their default model text, 
                                and a search for 'lorem ipsum' will uncover many web sites still 
                                in their infancy. Various versions have evolved over the years.
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
        <div class="price-area price-shape pt-100 pb-70">
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
                                        <h2><sup>$</sup>30<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li class="color-gray">SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>60<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>90<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li>Content Marketing</li>
                                        <li>Social Marketing</li>
                                    </ul>
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
                                        <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li class="color-gray">SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li>Content Marketing</li>
                                        <li>Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-success'></i>
                            <h3><span class="counter">15</span></h3>
                            <p>Years Experience</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-launch'></i>
                            <h3><span class="counter">900</span>+</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-customer'></i>
                            <h3><span class="counter">800</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-team-building'></i>
                            <h3><span class="counter">25</span>+</h3>
                            <p>Expert Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Client Area -->
        <div class="client-area pt-100 pb-70">
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
                    <div class="client-item">
                        <div class="client-item-img">
                            <img src="assets/img/testimonial/t1.png" alt="Testimonial Images">
                        </div>
                        <h3>John Doe</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </div>

                    <div class="client-item">
                        <div class="client-item-img">
                            <img src="assets/img/testimonial/t4.png" alt="Testimonial Images">
                        </div>
                        <h3>Knot Doe</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </div>

                    <div class="client-item">
                        <div class="client-item-img">
                            <img src="assets/img/testimonial/t5.png" alt="Testimonial Images">
                        </div>
                        <h3>John Smith</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </div>
                    <div class="client-item">
                        <div class="client-item-img">
                            <img src="assets/img/testimonial/t3.png" alt="Testimonial Images">
                        </div>
                        <h3>Evanaa</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Area End -->

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