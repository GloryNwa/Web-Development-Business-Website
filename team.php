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
                <li class="active">Team</li>
              </ul>
              <h2 style="color:#ff5821">Our Team</h2>
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
           <!--  <ul class="team-categ filter">
              <li class="all active"><a href="#">All Divisions</a></li>
              <li class="design"><a href="#" title="">Design</a></li>
              <li class="marketing"><a href="#" title="">Marketing</a></li>
              <li class="dev"><a href="#" title="">Development</a></li>
            </ul> -->
         
            <div class="clearfix"></div>
            <h4 class="title">Brilliant Developers <strong>  Team Members</strong></h4>
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
                            $linkedin      = $query_row['linkedin'];
                            
                          
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
                        <?php if($linkedin == ''){
                            echo '';
                          }else{?>
                            <li><a href="<?php echo $linkedin;?>" title="Linkedin"><i class="icon-circled icon-bgdark icon-linkedin"></i></a></li> 
                            <?php
                          }?>
                          <?php if($twitter == ''){
                            echo '';
                          }else{?>
                            <li><a href="<?php echo $twitter;?>" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li> 
                            <?php
                          }?>
                           <?php if( $facebook  == ''){
                            echo '';
                          }else{?>

                            <li><a href="<?php echo $facebook;?>" title="facebook"><i class="icon-circled icon-bgdark icon-facebook"></i></a></li>
                            <?php 
                          }?>
                           <?php if($git == ''){
                            echo '';
                          }else{?>
                            <li><a href="<?php echo $git;?>" title="github"><i class="icon-circled icon-bgdark icon-github"></i></a></li>
                            <?php 
                          }?>
                           <?php if($insta == ''){
                            echo '';
                          }else{?>
                            <li><a  href="<?php echo $insta;?>" title="instagram"><i class="icon-circled icon-bgdark icon-instagram"></i></a></li> 
                            <?php
                          // }else{
                          //   echo '';
                          }
                          ?>
                         
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
        </div>
        <hr>
         <div class="row">
          <div class="span12">
            <div class="cta-box">
              <div class="row">
                <div class="span8">
                  <div class="cta-text">
                    <h4>Special price within a <span style="color:#ff5821">shorter</span> time frame</h4>
                  </div>
                </div>
                <div class="span4">
                  <div class="cta-btn">
                    <a href="contact.php" class="btn btn-theme" style="background-color:#ff5821">Contact Us <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        </div>
    </section>
<?php include("footer2.php");?>