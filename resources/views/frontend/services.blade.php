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
        <div class="inner-banner inner-bg2">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Services</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Area -->
        <section class="service-area pt-100 pb-70">
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/1.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>SEO Optimization</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/2.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Social Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/3.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Content Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/4.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Analytical Analysis</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/5.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>App Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/6.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Web Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

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
        </section>
        <!-- Service Area End -->


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