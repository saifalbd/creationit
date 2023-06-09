<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>Creation Institute of Technology</title>
		
		<!-- Favicon -->
		<link rel="icon" type="/frontend/img/logo.png" href="/frontend/img/tab_icon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="/frontend/css/hind-silliguri.css">
		<link rel="stylesheet" href="/frontend/css/noto-bengali.css">
		<link rel="stylesheet" href="/frontend/css/animate.min.css">
	
		<link rel="stylesheet" href="/frontend/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="/frontend/icons/css/all.min.css">
		<link rel="stylesheet" href="/frontend/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="/frontend/css/magnific-popup.min.css">
		<link rel="stylesheet" href="/frontend/css/owl-carousel.min.css">
		<link rel="stylesheet" href="/frontend/css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="/frontend/css/reset.css">
		<link rel="stylesheet" href="/frontend/css/style.css">
		<link rel="stylesheet" href="/frontend/css/responsive.css">
			<link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
		<!-- Bizwheel Colors -->
		<link rel="stylesheet" href="/frontend/css/skins.css">


<style>

.link-lg{
	display: none !important;
}

@media(max-width: 768px){
.sm-none {
	display: none !important;
}

.link-lg{
	display: block !important;
}



}	
</style>
	</head>
<body id="bg"> 
	<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<!-- <div class="preeloader">
			<div class="preloader-spinner"></div>
		</div> -->
		<!--/ End Preloader -->
	
		<!-- Header -->


		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
							<!-- Top Contact -->
							<div class="top-contact"> 
								<div class="single-contact">
									<li><i class="fas fa-phone"></i>01777560463 </li>
									<li><i class="fas fa-clock"></i>Opening Time: 9:30AM - 8:30PM</li>
								</div> 

								<div class="single-contact sm-none">
									<a href="{{route('frontend.verification.create')}}" class="header-link"><i class="fas fa-search"></i>  Verification</a>
									<a href="{{route('frontend.admission')}}" class="header-link"> <i class="far fa-file"> </i> Admission</a>
								</div> 
							</div>
							<!-- End Top Contact -->
						</div>	

					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="{{route('frontend')}}">
													<img src="/frontend/img/logo_.png" style="height: 50px;float: left;margin-right: 8px;"  alt="#">
													 
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul  class="nav main-menu menu navbar-nav">
																<li><a href="{{route('frontend')}}"><i style="font-size: 1rem;"class="fa fa-home"></i> </a></li>
															<li class="icon-active"><a href="{{route('about.us',1)}}">আমাদের সম্পর্কে <i class="fas fa-angle-down"></i> </a>
																	<ul class="sub-menu">
																		<li><a href="{{route('about.us')}}">আমাদের সম্পর্কে</a></li>
																		<li><a href="{{route('founder')}}">আমাদের ফাউন্ডার</a></li>
																		<li><a href="{{route('success.student')}}">সফল শিক্ষার্থী </a></li>
																		
																	</ul>
																</li>
																<li class="icon-active"><a href="{{route('frontend.course')}}">কোর্স <i class="fas fa-angle-down"></i> </a>
																	<ul class="sub-menu">
																		<li class="mobile-menu"><a href="{{route('frontend.course')}}">কোর্স </a></li>
																		<li><a href="{{route('course.freelancing')}}">ফ্রিল্যান্সিং </a></li>
																	</ul>
																</li>
														 
																
																
																<li><a href="{{route('frontend.instructor')}}">আমাদের প্রতিনিধি</a></li>
																<li><a href="{{route('frontend.news')}}">নিউজ</a></li>
																<li><a href="{{route('other.institute')}}">অঙ্গ প্রতিষ্ঠান </a></li>
														 
																
													 
																
																<li><a href="{{route('frontend.contact')}}">যোগাযোগ</a></li>
																<li class="link-lg"><a href="{{route('frontend.verification.create')}}" class="header-link"><i class="fas fa-search"></i>  Verification</a></li>
																<li class="link-lg"><a href="{{route('frontend.admission')}}" class="header-link"> <i class="far fa-file"> </i> Admission</a></li>
																
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											
											
										</div>
									</div>
									{{-- social link --}}
									<div class="col-md-2">
										<div class="socil-link">
											<ul>
												<li><a target="_blank" href="https://web.facebook.com/CreationITechnology"><i class="fab fa-facebook-f"></i></a></li>
												<li><a target="_blank" href="https://www.instagram.com/creation_institute/?fbclid=IwAR15MZNbZHK9Bwj7hLxNC7390FjcukMYEt5DgGQRXVuLIMs8sT3cGxHqMWs"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
		</header>
		<!--/ End Header --> 
		
		 
        {{$slot}}


		<!-- Footer -->
		<footer class="footer" style="background-image:url('frontend/img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						 
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Main Menu</h3>
								<ul>
						<li><a href="{{route('frontend.verification.create')}}"> Student Verfication</a></li>
						<li><a href="{{route('frontend.admission')}}"> Admission</a></li>
						<li><a href="{{route('frontend.course')}}">Courses</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-5 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Important Govt Website</h3>
									<ul>
								<li><a target="_blank" href="http://www.educationboardresults.gov.bd/"> Education Board Result </a></li>
								<li><a target="_blank" href="https://services.nidw.gov.bd/nid-pub/"> NID Application System  </a></li>
								<li><a target="_blank" href="https://pcc.police.gov.bd/"> Bangladesh police </a></li>
								<li><a target="_blank" href="https://www.epassport.gov.bd">  Bangladesh e-Passport Portal </a></li>
								<li><a target="_blank" href="https://eboardresults.com/v2/home"> RESULT PUBLICATION SYSTEM FOR EDUCATION BOARDS </a></li>
								<li><a target="_blank" href="http://www.bteb.gov.bd/"> বাংলাদেশ কারিগরি শিক্ষা বোর্ড </a></li>
								<li><a target="_blank" href="http://180.211.137.51/"> Directorate of Primary Education </a></li>
		 </ul>
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-4 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Contact</h3>
								<p>Use the below info to contact us or visit our office </p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i> 01777560463</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i> creationit2020@gmail.com</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i> Shamshernagar Road, Beside of Shah Mostafa college, Moulvibazar</li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
				 
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">Creation Institute of Technology</a>. Design &amp; Development By <a target="_blank" href="https://web.facebook.com/NSITCompnay">NS IT</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
		<!-- Jquery JS -->
		<script src="frontend/js/jquery.min.js"></script>
		<script src="frontend/js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="frontend/js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="frontend/js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="frontend/js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="frontend/js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="frontend/js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="frontend/js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="frontend/js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="frontend/js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="frontend/js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="frontend/js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="frontend/js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="frontend/js/active.js"></script>
	</body>
</html>