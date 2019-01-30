<?php 
	//if(isset($_POST['submit'])){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$to = "sales@projecontrol.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$first_name = $_POST['name'];
		$subject = $_POST['subject'];//Form submission";
		$subject2 = $_POST['subject'];//"Copy of your form submission";
		$message = $first_name . " wrote the following: " . "\n\n" . $_POST['message'];
		$message2 = "Here is a copy of your message, " . $first_name . "\n\n" . $_POST['message'];

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		$link_address = 'index.html';
		echo "</br> <a class='btn btn-primary btn-w180' href='$link_address'>Home</a>";
		//echo "</br><button onclick='goBack()'>Go Back</button>
		//		<script>
		//		function goBack() {
			//		window.history.back();
				//}
				//</script>";
		//header('Location: contact.html'); 
		// You cannot use header and echo together. It's one or the other.
		//
	}
	//else
		//echo "ERROR: Could not send the email";
	
?>
<!--<html>
	<head> </head>
	<body>
		</br><button onclick="goBack()">Go Back</button>
		<script>
		function goBack() {
			window.history.back();
		}
		</script>
	</body>
</html>-->

<?php/*
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/owl.carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/_jquery/jquery.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css"><!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap">
			
			<!-- header -->
			<header class="header header__style-02">
				<div class="container">
					<div class="header__logo"><a href="index.html"><img src="assets/img/logo.png" alt=""/></a></div>
					<div class="header__toogleGroup">
						<div class="header__chooseLanguage">
										
										<!-- dropdown -->
										<div class="dropdown" data-init="dropdown"><a class="dropdown__toggle" href="javascript:void(0)">EN <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown__content" data-position="right">
												<ul class="list-style-none">
													<li><a href="#">EN</a></li>
													<li><a href="#">DE</a></li>
													<li><a href="#">VI</a></li>
												</ul>
											</div>
										</div><!-- End / dropdown -->
										
						</div>
						<div class="search-form">
							<div class="search-form__toggle"><i class="ti-search"></i></div>
							<div class="search-form__form">
												
												<!-- form-search -->
												<div class="form-search">
													<form>
														<input class="form-control" type="text" placeholder="Hit enter to search or ESC to close"/>
													</form>
												</div><!-- End / form-search -->
												
							</div>
						</div>
					</div>
					
					<!-- consult-nav -->
					<nav class="consult-nav">
						
						<!-- consult-menu -->
						<ul class="consult-menu">
							<li class="current-menu-item"><a href="index.html">Home</a>
							</li>
							<li><a href="about.html">about</a>
							</li>
							<li><a href="training.html">training</a>
							</li>
							<li><a href="pricing.html">pricing</a>
							</li>		
							<li><a href="contact.html">contact us</a>
							</li>
						</ul><!-- consult-menu -->
						
						<div class="navbar-toggle"><span></span><span></span><span></span></div>
					</nav><!-- End / consult-nav -->
					
				</div>
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="md-content">				
				
				<p>Mail Sent. Thank you <?php $first_name ?>, we will contact you shortly."</p>
				</br><button onclick="goBack()">Go Back</button>
				<script>
				function goBack() {
					window.history.back();
				}
				</script>
				
			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			<footer class="footer">
				<div class="footer__main">
					<div class="row row-eq-height">
						<div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
							<div class="footer__item"><a class="consult_logo" href="#"><img src="assets/img/logo.png" alt=""/></a>
								<p>We provide many solutions to your problems. Be rest assured that we are always available to provide solutions for you adequately, efficiently, effectively and on time.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
							<div class="footer__item">
									
									<!-- widget-text__widget -->
									<section class="widget-text__widget widget">
										<div class="widget-text__content">
											<ul>
												<li><a href="#">Term of Services </a></li>
												<li><a href="#">Privacy Policy </a></li>
												<li><a href="#">Sitemap </a></li>
												<li><a href="#">Help</a></li>
											</ul>
										</div>
									</section><!-- End / widget-text__widget -->
									
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 ">
							<div class="footer__item">
									
									<!-- widget-text__widget -->
									<section class="widget-text__widget widget">
										<div class="widget-text__content">
											<ul>
												<li><a href="#">How It Work </a></li>
												<li><a href="#">Carrier </a></li>
												<li><a href="#">Pricing </a></li>
												<li><a href="#">Support</a></li>
											</ul>
										</div>
									</section><!-- End / widget-text__widget -->
									
							</div>
						</div>
						<div class="col-md-4 col-lg-2 col-xl-2 ">
							<div class="footer__item">
									
									<!-- form-sub -->
									<div class="form-sub">
										<h4 class="form-sub__title">Our Newsletter</h4>
										<form class="form-sub__form">
											<div class="form-item">
												<input class="form-control" type="email" placeholder="Enter Your Email Address..."/>
											</div>
											<div class="form-submit">
												<button class="form-button" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
											</div>
										</form>
									</div><!-- End / form-sub -->
									
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
							<div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
						</div>
					</div>
				</div>
				<div class="footer__copyright"> &copy; 2018. Proje Control Ltd</div>
			</footer><!-- End / footer -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.countTo/jquery.countTo.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.countUp/jquery.countup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/owl.carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.min.js"></script>
		<script type="text/javascript" src="assets/vendors/smoothscroll/SmoothScroll.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>
*/?>