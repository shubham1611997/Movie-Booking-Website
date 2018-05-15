<!DOCTYPE html>
<html>
<head>
	<title>SHOW-FINDER</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#section1">Homepage</a></li>
					<li><a href="#section2">About Us</a></li>
					<li><a href="#section3">Services</a></li>
					
					<li><a href="#section4">Contact</a></li>

					
					
				</ul>
			</div> 
			<ul class="nav navbar-nav" style="float:center;">
			<li><a href="signup/signup.htm">Signup</a></li>
					<li><a href="signup/login.html">Login</a></li>  
					<ul>
		</div>
	</nav>    

	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1 style='color:orange;'>WELCOME TO BEST ONLINE MOVIE BOOKING SITE</h1>
							
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
			</div>
			<div id="section3">
				<!-- Start Services Area -->
				<section id="services-area" class="services-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center inner our-service">
								<div class="service">
									<h1 style='color:black;'>Our Services</h1>
									<p style='color:black;'><B>We provide the best online movie booking experience ever.</B></p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Services Area -->
					<br>
					<br>
					<br>

					
				</div>
				<div id="section4">
					<!-- Start Contact Area -->
					<section id="contact-area" class="contact-section">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center inner">
									<div class="contact-content">
										<h1>Feedback form</h1>
										<div class="row">                            
											<div class="col-sm-12">
												<p>Please suggest us the ways through which we can improve our services.</p>
												</div>                            
											</div>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<form action="#" method="post" class="contact-form">
											<div class="col-sm-6 contact-form-left">
												<div class="form-group">
													<input name="name" type="text" class="form-control" id="name" placeholder="Name">
												  	<input type="email" name="email" class="form-control" id="mail" placeholder="Email">
													<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-sm-6 contact-form-right">
												<div class="form-group">
													<textarea name="message" rows="6" class="form-control" id="comment" placeholder="Your message here..."></textarea>
													<button type="submit" class="btn btn-default">Send</button>
												</div>
											</div>                        
										</form>    
									</div>                
								</div>
							</div>
						</section>
						<!-- End Contact Area -->
					</div>

					<!-- Start Footer Area -->
					
						<!-- End Footer Area -->

						<script src="js/jquery-1.11.2.min.js"></script>
						<script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
						<script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
						<script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
						<script>

    // HTML document is loaded. DOM is ready.
    $(function() {  

    // Parallax
        $('.intro-section').parallax({
        	imageSrc:'collage1.jpg ',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	})
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });    

        // jQuery Scroll Up / Back To Top Image
        $.scrollUp({
                scrollName: 'scrollUp',      // Element ID
		        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top',           // 'top' or 'bottom'
		        scrollSpeed: 1000,            // Speed back to top (ms)
		        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
		        animation: 'fade',           // Fade, slide, none
		        animationSpeed: 300,         // Animation speed (ms)		        
		        scrollText: '', // Text for element, can contain HTML		        
		        scrollImg: true            // Set true to use image		        
            });

        // ScrollUp Placement
        $( window ).on( 'scroll', function() {

            // If the height of the document less the height of the document is the same as the
            // distance the window has scrolled from the top...
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                // Adjust the scrollUp image so that it's a few pixels above the footer
                $('#scrollUp').css( 'bottom', '80px' );

            } else {      
                // Otherwise, leave set it to its default value.
                $('#scrollUp').css( 'bottom', '30px' );        
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });
        
    });
</script>
</body>
</html>