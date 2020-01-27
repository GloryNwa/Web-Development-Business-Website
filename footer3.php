
    <!-- end header -->
<style>
  h4:hover{
    color: #ff5821 !important;
    
  }
  .btn-medium{
   background-color: #ff5821 !important;
   color:#fff;
  }
  .btn:hover{
   background-color: #ff5821 !important;
   color:#fff;
  }
  h5:hover{
    color: #ff5821 !important;
    background-color: none !important;
    
  }
 .url:hover{
    color: #ff5821 !important;
    background-color: none !important;
    text-decoration:none
  }
   }
 li.url:hover{
    color: #ff5821 !important;
    background-color: none !important;
    text-decoration:none
  }
</style>

<div class="row">
          <div class="span12 aligncenter">
            <h4 class="title">What people are <strong>saying</strong> about us</h4>
            <div class="blankline30"></div>

            <ul class="bxslider">
            <?php  $query = "SELECT * FROM testimony LIMIT 7";
             if ($query_run = mysqli_query($connection,$query)) {


         while($query_row = mysqli_fetch_assoc($query_run)){
              $testimoni = $query_row['testimoni'];
              $name = $query_row['name'];
              $url = $query_row['url'];     
            
          ?>
              <li>
                <blockquote>
                <?php echo $testimoni;?>
                </blockquote>
                <div class="testimonial-autor">
                  <!-- <img src="img/dummies/testimonial/1.png" alt="" /> -->
                  <h4><?php echo $name; ?></h4>
                  <a href="#">
                  <div class="url"><?php echo $url;?></div></a>
                </div>
              </li>
              <?php
               }
              }
            ?>
            
            </ul>

          </div>
        </div>

      </div>
    </section>
  </div>

 <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4 class="title">Recent <strong>Works</strong></h4>
            <div class="row">
              <div class="grid cs-style-4">

             <?php  $query = "SELECT * FROM recentjobs ORDER BY id DESC LIMIT 4";
               if ($query_run = mysqli_query($connection,$query)) {
                
                while($query_row = mysqli_fetch_assoc($query_run)){
                    $file    = $query_row['picture'];
                    $site    = $query_row['site'];
                    $desc    = $query_row['description'];
                  ?>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div> <img src='<?php echo "admin/uploads/" .$file;?>'width="300px" alt="" style="height:200px"/></div>
                      <figcaption>
                        <div>
                       <span>
                            <a href="<?php echo $site;?>"><i class=" icon-square icon-bglight icon-3x">view</i></a>
                       </span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                </a>
              <?php
                 }

              }

           ?>
           </div>
           </div>
          </div>
        </div>
      </div>

    </section>
    <div style="border: 1px solid #ff5821"></div>
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

                 <a href="viralMarketing.php"><li class="url">Digital Marketing</li></a>
              </ul>

            </div>
          </div>

           <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Get in touch</h5>
             <!--  <address>
          <strong>Eterna company Inc.</strong><br>
            Somestreet 200 VW, Suite Village A.001<br>
            Jakarta 13426 Indonesia
      </address> -->
              <p style="color: #fff">
                <i class="icon-phone" style="color: #ff5821"></i> +2347068057873 / +2348137434299 <br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> info@brilliantdevelopers.net
              </p>
              <br>
             <hr>   
              <h5 style="color:#fff">Number Guessing Game</h5>
              <div id="game">
             <p style="color: #fff">Guess a number between <span class="min-num"></span> and <span class="max-num"></span></p>
             <input type="number" id="guess-input" placeholder="Enter your quess..." style="padding:6px">
             <input type="submit" value="Go" id="guess-btn"style="background-color:#ff5821; color: #fff;border:none; border-radius:2px; padding:6px; margin-bottom:8px">
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
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
               <!--  Designed by <span style="color: #ff5821">  Brilliant Developers</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup" style="background-color:#ff5821 !important "><i class="icon-angle-up icon-square icon-bglight icon-2x"></i></a>

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

  <script src="https://js.paystack.co/v1/inline.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

   <script src="js/guesser.js"></script>

   <script type="text/javascript">
     function payWithPaystack(glory){

    var handler = PaystackPop.setup({
      key: 'pk_test_76077b21fc087731cb271079ee8063506132c903',
      email: glory['email'],
      amount: glory['amount'] * 100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: glory['fname'] + ' ' + glory['lname'],
                variable_name: "mobile_number",
                value: glory['phone']
            }
         ]
      },
      callback: function(response){
          var ref = response.reference;

          var bright = {};
          bright.fname = glory['fname'];
          bright.lname = glory['lname'];
          bright.phone = glory['phone'];
          bright.ref = ref;

          $.ajax({
            method: "post",
            data: bright,
            url: "verify.php",
            success: function(nwa){
              console.log(nwa);
            }
          });
      },
      onClose: function(){
          // alert('window closed');
      }
    });
    handler.openIframe();
  }
   </script>
</body>
</html>
   

 