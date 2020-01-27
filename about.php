<?php include("header.php");?>  
    <!-- end header -->

    <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                  <div class="bg-img" ></div>
              <ul class="breadcrumb">
                <li><a href="index.php" style="color:#ff5821 !important">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">About</li>
              </ul>
              <h2 style="color:#ff5821">About us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="border: 1px solid #ff5821"></div>

    <section id="content">
      <div class="container">
      <div class="card">
       <div class="card-content">
        <div class="row">
          <div class="span12">
            <h4> WHO WE ARE</h4>
            <p>
          
We are driven by group of Young Brilliant Web Developers, Strategic Thinkers, Creative Designers, Programmers, IT Consultants and Software Managers. Developing and managing several web projects in Nigeria and abroad.
            </p>
            <p>
              <p>Brilliant Developers was established by a team of professionals who are developers, programmers, IT consultants and software managers in 2018.<br> The organization from inception has been driven by group of IT experts and has developed and manage several web projects to her credits.</p>
<p>We specialize in world class Web Design, Development, Programming, Sophisticated Web-Base Applications, E-commerce System, Web portal, Content Management System, Content Development, Database Design and Development etc. Brilliant Developers features an integrated team of web experts who knows how to get the <b>Real World Results.</b></p>
<p>Our business-driven approach differentiates us from typical web development companies. For the past few years we have built up a reputation for creating a positive return on investment (ROI) for our clients. If you are serious about your business online solution, we can get you there. - Discover the Developers Difference.</p>
</div>
            </p>
            </div>

          </div>

        </div>

        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <!-- end divider -->
        <h4 class="title">Brilliant Developers <strong>  Team</strong></h4>
       
      <div class="row">
              <section id="team">
                <ul id="thumbs" class="team">

                  <!-- Item Project and Filter Name -->
                    <?php  $query = "SELECT * FROM team ORDER BY id ASC LIMIT 8";
                       if ($query_run = mysqli_query($connection,$query)) {

                        while($query_row = mysqli_fetch_assoc($query_run)){
                            $file    = $query_row['pics'];
                            $name    = $query_row['name'];
                            $twitter = $query_row['twitter'];
                            $insta   = $query_row['instagram'];
                            $facebook = $query_row['facebook'];
                            $position = $query_row['position'];
                            $git      = $query_row['github'];
                            
                          
                      ?>
                   <li class="item-thumbs span4 design" data-id="id-0" data-type="design">
                    <div class="team-box thumbnail" style="height: 320px">
                   
                      <img src="<?php echo 'admin/teamPics/' .$file;?>" height="" alt=""  style="height: 200px" />
                      <div class="caption">
                        <h5><?php echo $name; ?></h5>
                        <p>
                          <?php echo $position; ?>
                        </p>
                       
                        <ul class="social-network">
                          <li><a href="<?php echo $twitter;?>" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                          <li><a href="<?php echo $facebook;?>" title="facebook"><i class="icon-circled icon-bgdark icon-facebook"></i></a></li>
                          <li><a href="<?php echo $git;?>" title="github"><i class="icon-circled icon-bgdark icon-github"></i></a></li>
                          <li><a href="<?php echo $insta;?>" title="instagram"><i class="icon-circled icon-bgdark icon-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                   <?php
                      }

                     }
                  ?>
                </ul>
              </section>

            </div>
        </div>
        <div class="blankline30"></div>
      </div>
    </section>
   <?php include("footer2.php");?>
