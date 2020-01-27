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
                <li class="active">Pricing </li>
              </ul>
               <h4><strong style="color:#ff5821">Our Plans</strong></h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="border: 1px solid #ff5821"></div>

    <section id="content">
      <div class="container">
        <div class="row">

       <?php include ("ourPlans.php");?>
       

     <?php include("training.php");?>
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
<?php include("footer3.php");?>