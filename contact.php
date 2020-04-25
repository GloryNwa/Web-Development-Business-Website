<?php include("header.php");
include("db.php");
ob_start();

if(isset($_POST["submit"])){
  $plan = $_POST["plan"];
  $name = $_POST["name"];
  $email = $_POST['email'];
  $phone = $_POST["phone"];
  $company = $_POST['company'];
  $budget = $_POST['budget'];
  $message = $_POST['message'];

  if(!empty($name)&&!empty($plan)&&!empty($email)&&!empty($phone)&&!empty($company)&&!empty($budget)&&!empty($message)){

    $sql = "INSERT INTO contacts(plan, name, email, phone, company, budget, message, time)";
    $sql .= "VALUES(
       '".mysqli_real_escape_string($connection,$plan)."',  
         '".mysqli_real_escape_string($connection,$name)."',
         '".mysqli_real_escape_string($connection,$email)."', 
         '".mysqli_real_escape_string($connection,$phone)."', 
         '".mysqli_real_escape_string($connection,$company)."',
          '".mysqli_real_escape_string($connection,$budget)."', 
         '".mysqli_real_escape_string($connection,$message)."',
         now()
         )";

       $result = mysqli_query($connection, $sql);
       if(!$result){
          $_SESSION['alert'] ='<div style="background-color:#dc3545; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px">Your message could not be submitted at this time, please try again!</div>';exit;

       }else{
          $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px;height:50px">Thank you for contacting us, we will get back to you shortly!</div>';
                   
       }
  }
}

?>
    <!-- end header -->

    <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                  <div class="bg-img" ></div>
              <ul class="breadcrumb">
                <li><a href="index.php" style="color:#ff5821 !important">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Contact</li>
              </ul>
              <h2 style="color:#ff5821">Get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--     <div style="border: 1px solid #ff5821"></div> -->   
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->  
      <section id="content"style="background-image: url(img/buildings.png);">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      <div class="container">
        <div class="row">
          <div class="span8">
             <div class="alert" style="background-color:#000; border:none">
           <?php if(isset($_SESSION['alert'])){ 
                    echo $_SESSION['alert'];
                    unset($_SESSION['alert']);
                   }

             ?>
             </div>
            <h4 style="color:#fff">Lets take your business to the next level >>>></h4>
           <!--  <div id="errormessage"></div> -->
            <form action="contact.php" method="POST" class="contactForm">

              <div class="row">
              <div class="span8 form-group">
                <select name="plan" required="" placeholder="Select Plan" style="width:100%;height:40px;margin-top:0px">
                          <option value="">Select Plan</option>
                           <option value="Basic">Basic One-Page Website</option>
                           <option value="Start-Up">Startup Up to 10 pages</option>
                           <option value="Established">Established Up to 30 pages</option>
                           <option value="Online-Shop">Online Shop</option>
                     </select>
                </div>
                <div class="span4 form-group field">
                  <input type="text" name="name" placeholder="Your Full Name" required style="border: 1px solid #ff5821" />
                  
                </div>

                <div class="span4 form-group">
                  <input type="email" name="email" id="email" placeholder="Your Email" data-msg="Please enter a valid email" required style="border: 1px solid #ff5821"/>
                  <div class="validation"></div>
                </div>
                 <div class="span4 form-group field">
                  <input type="text" name="phone" placeholder="Your Phone Number" required style="border: 1px solid #ff5821" />
                  
                </div>

                <div class="span4 form-group">
                  <input type="text" name="company" id="email" placeholder="Your Company" data-msg="Please enter a valid email" required style="border: 1px solid #ff5821"/>
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" name="budget" id="subject" placeholder="Your Budget" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required style="border: 1px solid #ff5821" />
                  <div class="validation"></div>
                </div>
                
                <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="Message" required style="border: 1px solid #ff5821"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" name="submit" type="submit" style="background-color:#ff5821; width: 100%">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="span4" style="color:#fff">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading" style="color:#fff">Contact information<span></span></h5>

                <ul class="contact-info">
                <i class="icon-phone" style="color: #ff5821"></i> <a class="url" href="tel:+07068057873" style="color:#fff;">07068057873 </a>, <a class="url" href="tel:+08137434299" style="color:#fff;">08137434299</a><br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> <a class="url"href="mailto: contact@brilliantdevelopers.net?Subject=Hello! Welcome to Brilliant Developers" target="_top" style="color:#fff;">contact@brilliantdevelopers.net</a><br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> <a class="url"href="mailto: techiebabes@gmail.com?Subject=Hello! Welcome to Brilliant Developers" target="_top" style="color:#fff;">techiebabes@gmail.com</a>
                </ul>
            
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  <?php include("footer4.php");?>