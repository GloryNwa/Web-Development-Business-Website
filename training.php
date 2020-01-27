 
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
<hr>
 <div class="row">
           <div class="span6">
            <div class="flyLeft">
              <h5><span class="colored" style="color:#ff5821"></span>Web Development  & <strong>Programming Training</strong></h5>

                <h6>__ABOUT THE TRAINING__</h6>

              <?php  $query = "SELECT * FROM webtraining ORDER BY id DESC LIMIT 1";
               if ($query_run = mysqli_query($connection,$query)) {

                while($query_row = mysqli_fetch_assoc($query_run)){
                    $file = $query_row['pics'];
                    $desc = $query_row['description'];
            
             ?>

              <p>
               <?php echo $desc;?>
              </p>
              <br>
              
              <h6>Amount to be paid for this training is ₦55,000 including certificate of completion. Installmental payment is allowed.</h6>

             <h6> Duration: Six months (6 Months)</h6>
              <br>
              <h6>This training is targeted at:</h6>
              <ul>
                  <li>Beginners with zero skill set in programming</li>
                  <li>People who already build website using CMS (WordPress, Joomla etc) but want to learn how to build it from scratch</li>
                  <li>Web designer that want to extend their skill and become web developer creating web app and software</li>
                 
               </ul>
               <br>
         
             
              
            </div>
          </div>
          <div class="span6">
           <img src='<?php echo "admin/uploads/" .$file;?>' alt="" class="flyRight" />
            <br><br>
            <h6>Benefits:</h6>
              <ul>
                <li>Opportunity to be your own boss</li>
                <li>Opportunity to get hired by multinational companies</li>
                <li>Opportunity to increase your earning after the training</li>
                <li> Certificate for every participant</li>
                 <li>100% practical class</li>
                <li>Experienced and competent facilitator</li>
              </ul>
              <br>

           <a href="reg.php"><p><button class=" btn btn-danger btn-xl" style="background-color: #ff5821; border:none">REGISTER NOW</button></p></a>

          </div>

           <?php
                 }
                }   

              ?>
               
             
        </div>