<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title class="text-green">Egerton University Hospital</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets/img/logo.png') }}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Swiper CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/swiper/css/swiper.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->
       
      
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('test/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('test/assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('test/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('test/assets/css/owl.css')}}">
	</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
        
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <!-- Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.html" class="navbar-brand logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo" height="50px">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu active">
                    <a href="#">Home <i class="fas fa-home"></i></a>
                    
                </li>
                <li class="has-submenu">
                    <a href="#">About Us <i class="fas fa-info"></i></a>
                    
                </li>	
                <li class="has-submenu">
                    <a href="#">Doctors <i class="fas fa-people"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Doctors</a>
                            <ul class="submenu">
                                <li><a href="map-grid.html">Map Grid</a></li>
                                <li><a href="map-list.html">Map List</a></li>
                            </ul>
                        </li>
                        <li><a href="search.html">Search Doctor</a></li>
                        <li><a href="doctor-profile.html">Doctor Profile</a></li>
                        <li><a href="booking.html">Booking</a></li>
                        <li><a href="favourites.html">Favourites</a></li>
                        <li><a href="chat.html">Chat</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="/phamacy/index">Pharmacy</a></li>
                        <li><a href="pharmacy-details.html">Pharmacy Details</a></li>
                        <li><a href="pharmacy-search.html">Pharmacy Search</a></li>
                        <li><a href="product-all.html">Product</a></li>
                        <li><a href="product-description.html">Product Description</a></li>
                        
                        
                    </ul>
                </li>
                
                <li class="has-submenu">
                    <a href="#">Webminer <i class="fas fa-plus"></i></a>
                    <ul class="submenu">
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="login-link">
                    <a href="">Login / Signup</a>
                </li>
            </ul>		 
        </div>		 
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>							
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Contact</p>
                    <p class="contact-info-header"> +1 315 369 5943</p>
                </div>
            </li>
            <li class="nav-item">
                @guest
                
                <a class="nav-link header-login" href="/signin">Login / Signup</a>
                @else
                <a class="nav-link header-login" href="/signin">{{'Welcome'}} {{Auth::user()->name}} </a>
                
               
                    
                @endguest
                
            </li>
        </ul>
    </nav>
</header>

<!-- /Header -->
    @yield('content')


    <!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2020 Egerton. All rights reserved.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
      <!-- Scripts -->
      <script src="{{asset('test/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('test/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('test/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      {{-- <script src="{{asset('test/vendor/bootstrap/js/popper.min.js')}}"></script> --}}
      <script src="{{asset('test/assets/js/owl-carousel.js')}}"></script>
      <script src="{{asset('test/assets/js/animation.js')}}"></script>
      <script src="{{asset('test/assets/js/imagesloaded.js')}}"></script>
      <script src="{{asset('test/assets/js/templatemo-custom.js')}}"></script>
     
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- Swiper JS -->
		<script src="{{ asset('assets/plugins/swiper/js/swiper.min.js') }}"></script>
		
		<!-- Slick JS -->
		<script src="{{ asset('assets/js/slick.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>
      

    
    </body>
    </html>