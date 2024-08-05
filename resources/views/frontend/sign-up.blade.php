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
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Sign Up</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start Sign Up Area -->
		<section class="sign-up-area ptb-100">
			<div class="container">
				<div class="section-title text-center">
                    <span>Sign Up</span>
					<h2>Create An Account!</h2>
					<p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
				</div>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
                        <p>with your social network</p>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-google-plus'></i>
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-facebook'></i>
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-twitter' ></i>
								</button>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Username">
								</div>
                            </div>
                            
                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="email" name="name" placeholder="Email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Sign Up
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Already have an account? 
									<a href="sign-up.html">Sign Up</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->

       @endsection