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
    <div class="inner-banner inner-bg5">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Blog Details</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <div class="blog-dtls ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-dtls-content">


                        <div class="blog-dtls-img">
                            <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Images">
                        </div>

                        <div class="blog-text">
                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->blog }}</p>
                            <a href="{{ route('blog_details', ['id' => $blog->id]) }}">Read More</a>

                        </div>

                        

                        <div class="row bolg-gallery">
                            <div class="bolg-gallery-item">
                                <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="Blog Images">
                            </div>
                            <div class="bolg-gallery-item">
                                <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="Blog Images">
                            </div>
                            <div class="bolg-gallery-item">
                                <img src="{{ asset('assets/img/blog/6.jpg') }}" alt="Blog Images">
                            </div>
                        </div>
                        {{--  <h3>Top 10 Tripes for Social Marketing</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer vitae commodo justo. In vulputate arcu imperdiet
                            arcu molestie ultrices ac nec tortor. Sed euismod placerat justo,
                            eget suscipit ex accumsan non. Curabitur id faucibus urna, eu
                            tincidunt diam. Nulla malesuada nibh ligula. Cras semper tristique dolor,
                            vitae ultricies massa eleifend sit amet. Proin id eros nisi.
                        </p>
                        <p>
                            Fusce tristique leo magna, nec bibendum lacus sollicitudin in.
                            Suspendisse augue est, dignissim vel elementum ut, vestibulum
                            eget dui. Sed purus odio, congue sed mi non, viverra commodo magna.
                            Donec at placerat erat. Maecenas vel odio eget urna viverra gravida.
                            Vestibulum risus neque, imperdiet in felis eget, pretium vestibulum nisl.
                            Maecenas ultrices, ipsum eleifend pellentesque pellentesque, velit massa
                            sodales eros, eu faucibus risus justo non est. Aenean non pellentesque ipsum.
                            Mauris varius maximus euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>  --}}
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>
                                <a href="#">Share</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
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
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#">Prev Post</a>
                                </div>

                                <div class="nav-next">
                                    <a href="#">Next Post</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment-area">
                            <h3 class="comment-title">2 Comments:</h3>
                            <div class="comment-card">
                                <div class="comment-author-img">
                                    <img src="{{ asset('assets/img/testimonial/t1.png') }}" alt="Images">
                                </div>
                                <div class="comment-author-title">
                                    <h3>John Doe</h3>
                                    <span>16 June 2020 10:00 PM</span>
                                </div>
                                <div class="comment-body">
                                    <p>
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do ei usmod tempor incididunt ut labore et dolore magna aliqua.
                                        Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                                    </p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div>
                            </div>

                            <div class="comment-card ml-50">
                                <div class="comment-author-img">
                                    <img src="{{ asset('assets/img/testimonial/t2.png') }}" alt="Images">
                                </div>
                                <div class="comment-author-title">
                                    <h3>Knot Doe</h3>
                                    <span>16 June 2020 10:30 PM</span>
                                </div>
                                <div class="comment-body">
                                    <p>
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do ei usmod tempor incididunt ut labore et dolore magna aliqua.
                                        Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                                    </p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div>
                            </div>

                            <div class="comment-card">
                                <div class="comment-author-img">
                                    <img src="{{ asset('assets/img/testimonial/t3.png') }}" alt="Images">
                                </div>
                                <div class="comment-author-title">
                                    <h3>John Smith</h3>
                                    <span>16 June 2020 10:50 PM</span>
                                </div>
                                <div class="comment-body">
                                    <p>
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do ei usmod tempor incididunt ut labore et dolore magna aliqua.
                                        Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                                    </p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div>
                            </div>

                            <div class="comment-respond">
                                <h3 class="comment-respond-title">Leave a Reply</h3>
                                <form class="comment-form">
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Comment *</label>
                                                <textarea name="Comment" class="form-control textarea-hight" id="Comment" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="post-com-btn">
                                                Post A Comment
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Search Now</h3>
                            <div class="post-wrap">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>

                        <section class="widget widget-popular-post">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 20, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Basic Guidline Layout for SEO Bigenner Level
                                            </a>
                                        </h4>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 21, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                How to Become Most Skilled Person in Social Marketing
                                            </a>
                                        </h4>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 22, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Basic Guidline Layout for SEO Bigenner Level
                                            </a>
                                        </h4>
                                    </div>
                                </article>

                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg4" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 23, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                How to Become Most Skilled Person in Social Marketing
                                            </a>
                                        </h4>
                                    </div>
                                </article>
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Archives</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">January <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">February <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">March <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">April <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">May <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">June <span>2020</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">Data Analysis <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Data Research <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">SEO Optimization <span>(20)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Social Marketing <span>(12)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">App Dvelelopment <span>(15)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Web Dvelelopment <span>(18)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="widget widget_tag">
                            <h3 class="widget-title">Tags</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">Seo</a>
                                    </li>
                                    <li>
                                        <a href="#">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#">Dvelelopment</a>
                                    </li>
                                    <li>
                                        <a href="#">Web</a>
                                    </li>
                                    <li>
                                        <a href="#">App</a>
                                    </li>
                                    <li>
                                        <a href="#">Analysis</a>
                                    </li>
                                    <li>
                                        <a href="#">Research</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
