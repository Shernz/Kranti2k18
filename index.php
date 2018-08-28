<!DOCTYPE html>
<html>
<!--made it a php file for it has to run on the server-->
<head>
  <title>Kranti 18</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, fluid" name="viewport"><!--The extra thing that was added was deleted-->
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <link rel="shortcut icon" type="image/x-icon" href="klogo.ico" />
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">


</head>

<body>
<div class="wrap">
  <!-- Navigation -->
  <nav id="navb" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- //added nav bar-fixed-top-->
    <div class="container" >
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a href="index.php"><img src="knavmain.png" alt="logonavbar"  height="80" width="100">
      </div>
      <div class=" -collapse">
        <ul  class="nav navbar-nav">
          <li class="current" href="#"><a></a></li>
          <li><a href="#particles-js">Home</a></li>
          <li><a href="#about">Description</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="#register">Register</a></li>
          <li><a href="#sponsors">Sponsors</a></li>
          <li><a href="#bottom-widget">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<div id="particles-js"></div>
  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row wow fadeInDown">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
          <div class="container-fluid headcolor" >
            <h2>Description</h2>
          </div>
            <div class="heading-line"></div>
            <p>KRANTI 2018 is an National Technical Symposium organized by the department of computer science  - Meenakshi Sundararajan engineering college, Chennai. Symposium offers a one-of-a-kind experience to students by providing an array of opportunities under one umbrella. The idea behind Kranti'18 is to brush up students’ interest in future forward technologies through workshop and provide rich exposure and esoteric knowledge. Kranti'18 looks forward to promote; ”AUTOMATION ANYWHERE”, envisioning the future with a bionic eyes, where artificial intelligence and other associated evolving technologies replacing everything in our day-to-day life.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 content">

          <p>
           Meenakshi Sundararajan Engineering College (MSEC) was established by the IIET Society in 2001. This institution is a part of the prestigious KRS Group of Institutions which also includes the renowned IIET (Indian Institute of Engineering Technology) established in 1947 by our Founder Late shri K.R.Sundararajan, the well-known Meenakshi College for Women and the more recently established Meenakshi Sundararajan School of Management. The institutions on the KRS Campus are known for the quality education they impart and their stringent levels of discipline. It has been consistently outshone all other peer institutions, not only in academics, but in co-curricular activities as well.  It has been constantly ranked in the Top 10 Engineering colleges in Tamil Nadu under Anna university affiliated colleges for the past several years by renowned rankings.
          </p>
        </div>
      </div>
<!--Countdown-->
<div class="container headcolor">
  <h2>Until we rumble</h2>
</div>
<br><br>
      <div id="clockdiv">
        <div>
          <span class="days"></span>
          <div class="smalltext">Days</div>
        </div>
        <div>
          <span class="hours"></span>
          <div class="smalltext">Hours</div>
        </div>
        <div>
          <span class="minutes"></span>
          <div class="smalltext">Minutes</div>
        </div>
        <div>
          <span class="seconds"></span>
          <div class="smalltext">Seconds</div>
        </div>
      </div>
    </div>
  </section>

<!--Register-->
<section id="register" class="home-section bg-white">
  <div class="container">
    <div class="container headcolor">
      <h2>Register</h2>
    </div>
    <br><br>
    <!--img src="img/registration_panel.jpg" alt=""-->
    <!--a href="../kranti-2k18/"></a-->
    <?php
        if(isset($_GET['registration']))
        {
            $message = $_GET['registration'];
            echo $message;
        }
    ?>
    <div class="container">
    <form  action="registration.php" method="post">
      <div class="form-group">
        <label for="name">Name :
        <input type="text" name="name" class="form-control" placeholder="Enter name"></label>
        </div>
      <div class="form-group">
        <label for="email">Email :
        <input type="text" name="email" class="form-control" placeholder="Enter email"></label>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number :
        <input type="text" name="contact" class="form-control" placeholder="Enter contact number"></label>
      </div>
      <div class="form-group">
        <label for="college">College Name :
        <input type="text" name="col_name" class="form-control" placeholder="Enter college name"></label>
      </div>
      <div class="form-group">
        <label for="gender">Gender :</label>
      </div>
      <div class="radio">
        <label class="radio-inline">
        <input type="radio" name="gender"  value='male'>Male</label>
        <label class="radio-inline"></label>
        <input type="radio" name="gender" value='female'>Female</label>
      </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
  </div>
</section>

<!--Sponsors-->
<section id="sponsors" class="home-section parallax" data-stellar-background-ratio="0.5">
   <div class="container">
     <div class="container headcolor">
       <h2>Sponsors</h2>
     </div>
     <div class="row">
       <div class="col-md-12">
         <ul class="clients">
           <li class="wow fadeInDown" data-wow-delay="0.3s"><a><img src="img/sponsors/1.png" alt="" /></a></li>
           <li class="wow fadeInDown" data-wow-delay="0.6s"><a><img src="img/sponsors/2.png" alt="" /></a></li>
           <li class="wow fadeInDown" data-wow-delay="0.9s"><a><img src="img/sponsors/3.jpg" alt="" /></a></li>
           <li class="wow fadeInDown" data-wow-delay="1s"><a><img src="img/sponsors/4.jpg" alt="" /></a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="container headcolor">
      <h2>Contact Us</h2>
    </div>
    <br><br>
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Campus</h5>
            <p>
              363, Arcot Road, Kodambakkam,<br /> Chennai, Tamil Nadu 600024
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              +91 9677057792<br> +91 7010323925

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              mseckranti2018@gmail.com
            </p>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container-fluid mapouter ">
        <div class="gmap_canvas">
          <iframe width="822" height="498" id="gmap_canvas" src="https://maps.google.com/maps?q=meenakshi%20sundararajan&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://www.pureblack.de">webdesign agentur</a>
        </div>
          <style>
          .mapouter{text-align:right;height:498px;width:822px;}.gmap_canvas {overflow:hidden;background:none!important;height:498px;width:822px;}
        </style>
      </div>

     <!--
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="https://www.facebook.com/Kranti2k18-223941261658272/">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="https://www.instagram.com/kranti2k18/">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Developed by Team Kranti</p>
      	</div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/mb.bgndGallery.js"></script>
  <script src="js/mb.bgndGallery.effects.js"></script>
  <script src="js/jquery.simple-text-rotator.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <script src="js/timer.js"></script><!--closed the script tag-->
  <!--Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
 <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>
  </div>
</body>
</html>
