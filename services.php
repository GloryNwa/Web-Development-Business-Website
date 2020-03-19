<?php include("header.php");?>  
    <!-- end header -->

    <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php"style="color:#ff5821 !important">Home</a> <i class="icon-angle-right"></i></li>
                
                <li class="active">Services</li>
              </ul>
              <h2 style="color:#ff5821">Our Services</h2>
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
            <h4 class="title"><b>WHAT WE DO</b></h4>
            <p>
              Brilliant Developers specializes in website Design, Development, Programming, Digital and Social Media Martketing services. Our web experiences are high-performing, feature-packed and digitally transformative. We provides Expert Web Solution Services to our clients.
            </p>
          </div>
        </div>


                <div class="row">
              <div class="span12">
                <div class="">
                  <h4>Our <strong>Services</strong></h4>
                  <p><!-- Lorem ipsum dolor sit amet, labores dolorum scriptorem eum an, te quodsi sanctus neglegentur. -->
                  </p>
                </div>
              </div>
            </div>
         <div class="row" style="">
                   <!--  -->
            <div class="span3">
             <div class="service-box aligncenter flyLeft" style="height: 410px;overflow: scroll">  <br> 
             <h5>Online Store</h5>
              <p>
               E-Commerce is at the center of the Internet economic revolution. We are a one-stop solution for e-Comerce Software Services. We develop custom Web e-Commerce store for clients worldwide. We deliver cutting edge technology solutions for online commerce industry. Our ecommerce solutions are built <!-- on latest technology. --> 
               <a href="ecommerce.php" style="text-decoration:none"><br>
               <button class="btn btn-default btn-xs">See More</button></a>
              </p>
          
          </div>
          </div>


<!-- <h4  style="text-align: center">OUR <strong>SERVICES</strong></h4> -->
       <?php  $query = "SELECT * FROM services ORDER BY id";
         if ($query_run = mysqli_query($connection,$query)) {

          while($query_row = mysqli_fetch_assoc($query_run)){
              $id = $query_row['id'];
              $title = $query_row['title'];
              $desc = $query_row['description'];            
          ?>
          <div class="span3">
            <div class="service-box aligncenter flyLeft" style="height: 410px;overflow: scroll">
              <div class="icon">
<!--                 <i class="icon-circled icon-bgprimary icon-shopping-cart icon-4x"></i>
 -->              </div>

                  <h5><?php echo substr($title,0,14) ;?></h5>  
                 <p>
                  <?php echo (substr($desc,0,275)) ;?>
              <br>
              <p></p>
              <?php echo '<a href="view_services.php?post/id='.$id.'" style="text-decoration: none"><p></p>
             <button class="btn btn-default btn-xs">See More</button></a>';?>
              </p>

            </div>
          </div>
         <?php
           }

         }

         ?>
         <div class="span3">
            <div class="service-box aligncenter flyLeft"  style="height: 410px;overflow: scroll">
              <div class="icon"></div>

         <h5>Digital & Social Media Marketing <span class="colored"></span></h5>
              <p>
                Digital marketing at Brilliant Developers is planned and executed based on objectives  <!-- encourages individuals to pass on a marketing message to others, creating the potential for exponential growth in the message’s exposure and influence. -->
                <p>These include:</p>
                <ul>
                  <li>Increase website traffic</li>
                  <li>Increase brand awareness</li>
                  <li>Online reputation management</li>
                  <li>Increase social media followers/engagement</li> 
                 <li>Increase online visibility</li> 
                   <li>Establish your company in local search</li>
                 <li>Establish your brand/business on social media</li>
                  <li>Marketing Strategy Report</li>               
               </ul>

               <a href="viralmarketing.php" style="text-decoration:none;">
              <button class="btn btn-default btn-xs">See More</button></a>
              </p>
          </div>
          </div>
         </div>

          
        <br>
       
        </div>
    <hr>


      </div>

    </section>

<?php include("footer3.php");?>