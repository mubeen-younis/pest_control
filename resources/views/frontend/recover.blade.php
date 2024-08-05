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
                    <h3>Recover Password</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Recover Password</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start Sign Up Area -->
		<section class="sing-up-area ptb-100">
			<div class="container">
				<div class="section-title text-center">
                    <span>Reset Password</span>
					<h2>Reset Your Password!</h2>
					<p>
                        Enter the email of your account to reset the password. Then you 
                        will receive a link to email to reset the password. If you have 
                        any issue about reset password <a href="contact.html">contact us.</a> 
                    </p>
				</div>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
						<div class="row">
                            
                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="email" name="name" placeholder="Enter Your Email">
								</div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">
								<a class="recover-login" href="sign-in.html">Sign In in your account</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="recover-register">
									Not a member?
									<a href="sign-up.html">Sign Up</a>
								</p>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Reset Password
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->

    @endsection    