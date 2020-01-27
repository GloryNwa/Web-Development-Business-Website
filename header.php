<?php session_start();
      ob_start();

 ?>

<?php include("db.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Brilliant Developers - Professional Web And Mobile Application Developers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
<!--   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" /> -->

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<style>
  .a:hover{
    background-color: #ff5821 !important;
    color: #fff;
  }
  .alert, .error{
       color: white;
       padding: 5px 0 15px 0;
       margin: 5px 0 15px 0;
   }
   .alert{
       background:green;
   }
   .error{
       background:red;
   }

</style>
</head>

<body onUnload="alert('Thank you for visiting our website,goodbye!');">

  <div id="wrapper" >

    <!-- start header -->
    <header  style="background-color: black">
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact" style="color:#fff; font-size:17px"><i class="icon-phone"></i>&nbsp;+2347068057873 / +2348137434299</p>
            </div>
           <!--  <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
              </ul>

            </div> -->
          </div>
        </div>
      </div>
      <div class="container">

        <marquee style="color:#ff5821">Thank you for visiting our website, how can we help you? We are Brilliant Developers driven by group of Strategic Thinkers, Creative Designers, Programmers, IT Consultants and software managers. We can be your Digital Problems Solution Partner  -- Contact Us Today!</marquee>
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/ylogo.png" alt="" style="height:40px; color: #e96b56" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown"  style="background-color:#ff5821!important">
                      <a href="index.php"class="home active a" style="color:#fff"><i class="icon-home" style="color:#fff;"></i> Home</i></a>
                    </li>
                    

                    <li class="dropdown">
                      <a href="#"  class="a" style="color:#fff">Our Company<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.php" class="a">About us</a></li>                      
                       
                        <li><a href="services.php"  class="a">Services</a></li>
                        <li><a href="pricing.php"  class="a">Our Plans</a></li>
                        <li><a href="team.php"  class="a">Our Team</a></li>
                        <li><a href="privacy.php" class="a">Privacy Policy</a></li>
                        <li><a href="terms.php"  class="a">Project Terms</a></li>
                     <!--    <li><a href="404.html">404</a></li> -->
                      </ul>
                    </li>
                     <li>
                      <a href="solutions.php" class="a" style="color:#fff">Our Solutions</a>
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#">Our Solutions<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Web Design, Development & Programming</a></li>
                        <li><a href="#">Website Maintainance & Upgrade</a></li>
                          <li><a href="#">Content Management System</a></li>
                        <li><a href="#">Web Development Training</a></li>
                        <li><a href="#">Content Development</a></li>
                         <li><a href="#">Web Application</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Website Hosting</a></li>
                        <li><a href="#">Logo Design</a></li>
                        <li><a href="#">Wordpress</a></li>
                        <li><a href="#">Portal</a></li>                      
                        
                      </ul>
                    </li> -->
                    <li class="dropdown">
                      <a href="portfolio.php"  class="a" style="color:#fff">Portfolio</a>
                   <!--    <i class="icon-angle-down"></i> -->
                      <!-- <ul class="dropdown-menu">
                        <li><a href=>My_Portfolio</a></li>
                        
                      </ul> -->
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li> -->
                    <li>
                      <a href="contact.php"  class="a" style="color:#fff">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>










    






