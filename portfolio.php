<?php include("db.php");?>
<?php session_start();
      ob_start();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Brilliant Developers - Professional Web And Mobile Application Developers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />
  
<link rel="stylesheet" href="includes/assets/css/material-dashboard.min.css?v=2.0.1">
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
<link rel="stylesheet" href="admin/assets/css/style.css">
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

</style>
</head>
<body>
  <div id="wrapper" >
    <!-- start header -->
    <header  style="background-color: black">
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact" style="color:#fff;font-size:17px"><i class="icon-phone"></i>+2347068057873 / +2348137434299</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/ylogo.png" alt="" style="height:40px; color: #e96b56" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
              <nav style="margin-left:90px">
                  <ul class="nav topnav">
                    <li class="dropdown"  style="background-color:#ff5821!important">
                      <a href="index.php"class="home active a" style="color:#fff;font-size:15px!important"><i class="icon-home" style="color:#fff"></i> Home</i></a>
                    </li>
                    

                    <li class="dropdown">
                      <a href="#"  class="a" style="color:#fff;font-size:15px!important">Our Company<i class="icon-angle-down"></i></a>
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
                      <a href="solutions.php" class="a" style="color:#fff;font-size:15px!important">Our Solutions</a>
                    </li>
                    <li class="dropdown">
                      <a href="portfolio.php"  class="a" style="color:#fff;font-size:15px!important">Recent Works</a>
                    </li>
                    <li class="dropdown">
                      <a href="train.php"  class="a" style="color:#fff;font-size:15px!important">Training</a>
                    </li>
                    
                    <li>
                      <a href="contact.php"  class="a" style="color:#fff;font-size:15px!important">Contact</a>
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
     <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
      <li><a href="index.php"style="color:#ff5821 !important"> Home &nbsp;</a><i class="icon-angle-right"></i>
                
                 <li class="active"> </li></a>&nbsp;|&nbsp;
                 <a href="about.php"><li style="color:#ff5821">About Us</li></a>&nbsp;|&nbsp;
                  <a href="solutions.php"><li style="color:#ff5821">Our Solution</li></a>&nbsp;|&nbsp;
                  <a href="contact.php"><li style="color:#ff5821">Contact Us</li></a>&nbsp;
              </ul>
                 <!--   <li class="active">Portfolio</li> -->
              <h2 style="color:#ff5821">Portfolio</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="border: 1px solid #ff5821"></div>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <li class="all active"><a href="#">Web Design</a></li>
              <li class="web"><a href="#" title="">Development</a></li>
              <li class="icon"><a href="#" title="">Programming</a></li>
              <li class="graphic"><a href="#" title="">Logo Design</a></li>
               <li class="graphic"><a href="#" title="">Web Hosting</a></li>
               <li class="graphic"><a href="#" title="">Script Writting</a></li>
               <li class="graphic"><a href="#" title="">Digital Marketing</a></li>
                <li class="graphic"><a href="#" title="">Content Development</a></li>
            </ul>

            <div class="clearfix"></div>

         <div class="content">
          <div class="container-fluid">        
           <div class="row">

            <?php  $query = "SELECT * FROM recentjobs ORDER BY id DESC LIMIT 6";
               if ($query_run = mysqli_query($connection,$query)) {
                
                while($query_row = mysqli_fetch_assoc($query_run)){
                    $file    = $query_row['picture'];
                    $site    = $query_row['site'];
                    $desc    = $query_row['description'];
              ?>

           <div class="col-md-4">
           <div class="card card-product" style="height: 300px; margin-bottom:100px">
            <div class="card-header card-header-image" data-header-animation="true">

             

             <a href="#pablo">
               <img src='<?php echo "admin/uploads/" .$file;?>' alt="" width="150px"style="height:220px"  />
              </a>
              </div>
               <div class="card-body">
                  <div class="card-actions text-center">
                     <a href="#">
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                       <a href="<?php echo $site;?>"><i class="material-icons">view</i></a>
                    </button>
                    </a>
                    
                </div>
                <h4 class="card-title">
                <div class="card-description" style="font-size:15px; color:#000">
                    <?php echo $desc;?>
                </div>
            </div>
        </div>
    </div>
     <?php
              }

            }

            ?>

            </div>
           </div>
           </div>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
    <div class="col-md-12">
     <footer style="background-image: url(img/map.png);">
      <div class="container">

        <div class="row">

           <div class="span2">
               <div class="widget">
                <h5 class="widgetheading">Our Company</h5>
               <ul class="link-list">
               <a href="about.php"><li class="url">Who We Are</li></a>
                <a href="services.php"><li class="url">What We Do</li></a>
                <a href="team.php"><li class="url">Our Team</li></a>
                <a href="privacy.php"><li class="url">Privacy Policy</li></a>
                <a href="terms.php"><li class="url">Term and Conditions</li></a>
               <!--  <li><a href="#">Press release</a></li> -->
              <!--   <li><a href="#">What we have done</a></li> -->
               </ul>
            </div>
          </div>

           <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Our Solutions</h5>
               <ul class="link-list">
               <a href="solutions.php" style="">
                <li class="url">Web Design, Development & <br>Programming</li>
                 <li class="url">Web Application</li> 
                   <li class="url">Content Development</li>
                    <li class="url">Web Development Training</li>
                 <li class="url">Content Management System</li>
                  <li class="url">Website Maintainance & Upgrade</li> 
                  </a>                                                  
              </ul>
              </div>
             </div>
         
          <div class="span2">
            <div class="widget">
              <h5 class="widgetheading">Our Services</h5>
              <ul class="link-list">
                 <a href="ecommerce.php"><li class="url">Online eCommerce</li></a>
                 <?php  $query = "SELECT * FROM services LIMIT 4";
                   if ($query_run = mysqli_query($connection,$query)) {

                   while($query_row = mysqli_fetch_assoc($query_run)){
                      $id = $query_row['id'];
                      $title = $query_row['title'];   
                ?>
                <?php echo '<a href="view_services.php?post/id='.$id.'" style="text-decoration: none"><li class="url">'.substr($title,0,23).''
                ;?></li></a>
                <?php
                   }
                 }
                 ?>

                 <a href="viralMarketing.php"><li class="url">Digital Marketing</li></a>
              </ul>

            </div>
          </div>

           <div class="span4">
            <div class="widget">
              <p style="color: #fff">
                <i class="icon-phone" style="color: #ff5821"></i> +2347068057873 / +2348137434299 <br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> contact@brilliantdevelopers.net<br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> techiebabes@gmail.com
              </p>
                <hr>   
              <h5 style="color:#fff">Number Guessing Game</h5>
              <div id="game">
             <p style="color: #fff">Guess a number between <span class="min-num"></span> and <span class="max-num"></span></p>
             <input type="number" id="guess-input" placeholder="Enter your quess..." style="padding:15px">
             <input type="submit" value="submit" id="guess-btn"style="background-color:#ff5821; color: #fff;border:none; border-radius:2px; padding:6px; margin-bottom:8px">
             <p class="message"></p>
            </div>

            </div>
          </div> 
        </div>
      </div>

      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
               <p> Copyright &copy; 2020 <span style="color: #ff5821">  Brilliant Developers   - All Right Reserved</span></p>
              </div>
             
            </div>

            <div class="span6">
              <div class="credits" style="text-align:  right;margin-top: 0px !important">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </div>
<script src="js/guesser.js"></script>
</body>
</html>

