<?php
session_start();

if(isset($_POST['logout']))
{
  unset($_SESSION['currentusername']);
    echo '<html><script type="text/javascript">alert("You are going to logout ! Kindly Close this session");</script></html>';
  
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <title>SHOW-FINDER</title>
<!--
Conquer Template
http://www.templatemo.com/tm-476-conquer
-->
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
  <div id="section2">
    <!-- Start Feature Area -->
    <section id="feature-area" class="about-section">
      <div class="container">
        <div class="row text-center inner">
          <div class="col-sm-4">
            <div class="feature-content">
              <img src="dangal.jpg" alt="Image">
              <h2 class="feature-content-title green-text">DANGAL</h2>
              <p class="feature-content-description">Dangal is an upcoming Indian Hindi-language biographical sports drama film directed by Nitesh Tiwari. It stars Aamir Khan as Mahavir Singh Phogat, who taught wrestling to his daughters Geeta Phogat and Babita Kumari.The former is India's first female wrestler to win at the 2010 Commonwealth Games, where she won the gold medal (55 kg). Her sister Babita Kumari won the silver (51 kg). "Dangal" is the Hindi term for "a wrestling competition".
              </p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="feature-content">
              <img src="kahaani2.jpg" alt="Image">
              <h2 class="feature-content-title blue-text">KAHAANI 2</h2>
              <p class="feature-content-description">Kahaani 2: Durga Rani Singh is a 2016 Indian thriller film directed by Sujoy Ghosh and produced by Ghosh and Jayantilal Gada. It features Arjun Rampal and Vidya Balan in lead roles.It is not a sequel of the 2012 film Kahaani but next installment from same brand. Principal photography took place from March 2016 to May 2016. The film was released on 2 December 2016.</p>                    
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="feature-content">
              <img src="dearzindagi.jpg" alt="Image">
              <h2 class="feature-content-title red-text">DEAR ZINDAGI</h2>
              <p class="feature-content-description">Dear Zindagi is a 2016 Indian coming of age drama film written and directed by Gauri Shinde. It was produced by Gauri Khan, Karan Johar and Shinde under the banners of Red Chillies Entertainment, Dharma Productions and Hope Productions respectively. The film features Alia Bhatt in lead role, with Ira Dubey, Kunal Kapoor, Angad Bedi and Ali Zafar in supporting roles. Shah Rukh Khan plays an extended cameo role in the film. The plot centers on a budding cinematographer named Kaira, who is in search of a perfect life and meets Dr. Jehangir, an unconventional thinker. He helps Kaira in gaining a new perspective about life.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    

    
    
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