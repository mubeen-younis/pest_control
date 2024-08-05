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
        <div class="inner-banner inner-bg4">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Our Latest Blogs</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
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
                                    <img src="{{ asset('storage/'. $blog->photo) }}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>{{ $blog->category }}</span></a>
                                </div>
                                <a href="{{ route('blog_details', ['id' => $blog->id]) }}">
                                    <h3>{{ $blog->title }}</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>

                    </div>
                    @endforeach



                    {{--  <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/2.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Marketing</span></a>
                                </div>
                                <a href="blog-details.html">
                                    <h3>How to Become Most Skilled Person in Social Marketing</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/3.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Data Research</span></a>
                                </div>
                                <a href="blog-details.html">
                                    <h3>Basic Guidline Layout for Data Research</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/5.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Development</span></a>
                                </div>
                                <a href="blog-details.html">
                                    <h3>Basic Guidline Layout for Web Development</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/4.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Data Analysis</span></a>
                                </div>
                                <a href="blog-details.html">
                                    <h3>How to Become Most Skilled Person in Data Analysis</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/6.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Development</span></a>
                                </div>
                                <a href="blog-details.html">
                                    <h3>Basic Guidline Layout for App Development</h3>
                                </a>
                                <a href="blog-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>  --}}

                    <div class="col-lg-12">
						<div class="pagination-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item current">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

       @endsection