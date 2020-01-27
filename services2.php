if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($phone)&&!empty($location)&&!empty($message)){

    $sql = "INSERT INTO training( firstname, lastname,email, phone, location, message, time)";
    $sql .= "VALUES(  
         '".mysqli_real_escape_string($connection,$fname)."',
         '".mysqli_real_escape_string($connection,$lname)."',
         '".mysqli_real_escape_string($connection,$email)."',
         '".mysqli_real_escape_string($connection,$phone)."', 
         '".mysqli_real_escape_string($connection,$location)."', 
         '".mysqli_real_escape_string($connection,$message)."',
         now()
         )";

       $result = mysqli_query($connection, $sql);
       if(!$result){
          // $_SESSION['alert'] ='<div style="background-color:#dc3545; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px">Your message could not be submitted at this time, please try again!</div>';exit;
        echo mysqli_error($connection);

       }else{


 <div class="span12">
                <div class="aligncenter">
                  <h4>Our <strong>Services</strong></43>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <div class="tabbable tabs-left">
                  <ul class="nav nav-tabs">
                  <li class="active"><a href="#topone" data-toggle="tab">Online Store</a></li>
                    <li><a href="#toptwo" data-toggle="tab">Web Bases Applications</a></li>
                    <li><a href="#topthree" data-toggle="tab">Product Design</a></li>
                      
                  </ul>
                  <div class="tab-content">

                    <div class="tab-pane active" id="topone">
                    <h5>Online  Store<span class="colored"></span></h5>
                      <p>
                     E-Commerce is at the center of the Internet economic revolution. We are a one-stop solution for e-Comerce Software Services. We develop custom Web e-Commerce store for clients worldwide. We deliver cutting edge technology solutions for online commerce industry. Our ecommerce solutions are built on latest technology.<br> 
                     <a href="ecommerce.php" style="text-decoration:none"><br>
                     <button class="btn btn-default btn-xs">See More</button></a>
                    </p>
                    <br>

                    <h5>Digital Marketing <span class="colored"></span></h5>
                    <p>
                      Digital marketing at Brilliant Developers is planned and executed based on objectives <!-- encourages individuals to pass on a marketing message to others, creating the potential for exponential growth in the message’s exposure and influence. -->
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

                     <a href="viralMarketing.php" style="text-decoration:none;">
                    <button class="btn btn-default btn-xs">See More</button></a>
                    </p>
                    </div>

                    <div class="tab-pane" id="toptwo">
                    <?php  $query = "SELECT * FROM services WHERE title = 'Web-Based Applications and Dynamic Websites' ORDER BY id desc LIMIT 1";
                     if ($query_run = mysqli_query($connection,$query)) {

                      while($query_row = mysqli_fetch_assoc($query_run)){
                          $id = $query_row['id'];
                          $title = $query_row['title'];
                          $desc = $query_row['description'];
                                         
                         ?>
                       <p>
                       <h4><?php echo $title ;?></h4>
                        <?php echo $desc ;?>
                       <br><br>
                    </p>                     
                    <p>
                    <?php echo '<a href="view_services.php?post/id='.$id.'" style="text-decoration: none"><p></p>
                   <button class="btn btn-default btn-xs">See More</button></a>';?>
                    </p>
                     <?php
                       }

                       }

                     ?>
                    </div>

                    <div class="tab-pane" id="topthree">
                       <?php  $query = "SELECT * FROM services WHERE title = 'Product Design' ORDER BY id desc LIMIT 1";
                     if ($query_run = mysqli_query($connection,$query)) {

                      while($query_row = mysqli_fetch_assoc($query_run)){
                          $id = $query_row['id'];
                          $title = $query_row['title'];
                          $desc = $query_row['description'];                       
                         ?>
                       <p>
                       <h4><?php echo $title ;?></h4>
                        <?php echo $desc ;?>
                       <br><br>
                      </p>                     
                    <p>
                    <?php echo '<a href="view_services.php?post/id='.$id.'" style="text-decoration: none"><p></p>
                      <button class="btn btn-default btn-xs">See More</button></a>';?>
                    </p>
                  <?php
                       }

                     }

                     ?>
                    </div>

                  </div>
                </div>