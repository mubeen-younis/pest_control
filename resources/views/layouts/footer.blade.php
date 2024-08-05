<!-- Footer Area -->
<footer id="footer" class="footer-area-bg">
    <div class="footer-area-top pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            <a href="index.html">
                                <img class="footer_logo" src="{{ asset('storage/'.$footerMain->logo) }}" alt="Logo">
                            </a>
                            <p>{{ $footerMain->title }}</p>
                        </div>

                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Email" name="EMAIL" required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    Subscribe
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-50">
                        <h3>Services</h3>


                        <ul>
                            @foreach ($footerServices as $service)
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ $service->link }}">{{$service->title }}</a>
                            </li>
                            @endforeach

                        </ul>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3>Quick Links</h3>
                        <ul>
                            @foreach ($footerQuickLink as $link)
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ $link->link }}">{{ $link->title }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3>Contact Us</h3>
                        <ul>
                            @foreach ($footerContact as $contact)
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ $contact->link }}">{{ $contact->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bottom-text text-center">
                        <p>
                            Copyright @<script>document.write(new Date().getFullYear())</script> Pest Control. All Rights Reserved</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


 <!-- Jquery Min JS -->
<script src="{{ asset('frontend-assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{ asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('frontend-assets/js/meanmenu.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('frontend-assets/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('frontend-assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('frontend-assets/js/wow.min.js') }}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('frontend-assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('frontend-assets/js/form-validator.min.js') }}"></script>
<!-- Contact Form JS -->
<script src="{{ asset('frontend-assets/js/contact-form-script.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
</body>
</html>
