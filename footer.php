 <footer style="background-image: url(img/map.png);">
      <div class="container">

        <div class="row">

           <div class="span3">
               <div class="widget">
                <h5 class="widgetheading">Our Company</h5>
               <ul class="link-list">
               <a href="about.php"><li class="url">Who We Are</li></a>
                <a href="services.php"><li class="url">What We Do</li></a>
                <a href="team.php"><li class="url">Our Team</li></a>
                <a href="privacy.php"><li class="url">Privacy Policy</li></a>
                <a href="terms.php"><li class="url">Project Terms</li></a>
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
         
          <div class="span3">
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

                 <a href="viralmarketing.php"><li class="url">Digital Marketing</li></a>
              </ul>

            </div>
          </div>

           <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch</h5>
             <!--  <address>
          <strong>Eterna company Inc.</strong><br>
            Somestreet 200 VW, Suite Village A.001<br>
            Jakarta 13426 Indonesia
      </address> -->
              <p>
                <i class="icon-phone" style="color: #ff5821"></i> <a href="tel:+07068057873"style="color:#fff;">07068057873 </a>, <a href="tel:+08137434299" style="color:#fff;">08137434299</a> <br>
                <!-- <i class="icon-envelope-alt" style="color: #ff5821"></i><a href="mailto: contact@brilliantdevelopers.net?Subject=Hello! Welcome to Brilliant Developers" target="_top" style="color:#fff;">contact@brilliantdevelopers.net</a><br> -->
                <i class="icon-envelope-alt" style="color: #ff5821"></i> <a href="mailto: techiebabes@gmail.com?Subject=Hello! Welcome to Brilliant Developers" target="_top" style="color:#fff;">techiebabe@gmail.com  </a> 
              </p>
            </div>
          </div> 
        </div>
      </div>

      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p> Copyright &copy; <span style="color: #ff5821">  Brilliant Developers</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                <p> Copyright &copy; 2020 <span style="color: #ff5821">  Brilliant Developers   - All Right Reserved</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- <a href="#" class="scrollup" style="background-color:#ff5821 "><i class="icon-angle-up icon-square icon-bglight icon-2x"></i></a> -->

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

   <script src="js/guesser.js"></script>
</body>
</html>
   

 