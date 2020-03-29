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
                <li class="active">Services</li>
              </ul>
              <h2 style="color:#ff5821">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="border: 1px solid #ff5821"></div>

    <!-- /section featured -->

    <section id="content">
      <div class="container">
        <div class="row">
        <?php
          if(isset($_GET['post/id'])){
             $post  = $_GET['post/id'];               
           
             $query = "SELECT id, title2, description, pics FROM services WHERE id =$post";
           
               if($query_run = mysqli_query($connection,$query)) {
  
               while($query_row = mysqli_fetch_assoc($query_run)){
                  $id = $query_row['id'];
                  $title2 = $query_row['title2'];
                  $desc = $query_row['description'];
                  $file = $query_row['pics'];
             ?>
       
          <div class="span6">
         
            <div class="flyLeft">
              <h4><b><?php echo $title2;?></b><span class="colored"></span></h4>
              <p>
                 <?php echo $desc;?>
               </p>
              
            </div>
          </div>
          <div class="span6">
                  <img src='<?php echo "admin/servicesUploads/" .$file;?>' alt="" class="flyRight" />
          </div>
       
        <?php
              }
            }
            } 
            ?>
        </div> 
        </div>    
     </section>
    <hr>
    <?php include('footerr.php');?>