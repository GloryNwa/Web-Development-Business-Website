<?php include("header.php");

session_start();

if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();


}


?>


<?php 
//session_start();

if(isset($_POST["submit"])){

  $desc = $_POST["desc"];
  $title = $_POST['title'];
  
  if(!empty($title)&&!empty($desc)){

    $sql = "INSERT INTO qualitydesign(title, description, time)";
    $sql .= "VALUES(  
         '".mysqli_real_escape_string($connection,$title)."',
         '".mysqli_real_escape_string($connection,$desc)."', 
         now()
         )";

       $result = mysqli_query($connection, $sql);
       if(!$result){
        echo ("Query Failed" . mysqli_error($connection));exit;

       }else{
          $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px;padding-right:50px">Service Created Successfully!</div>';
                   
       }
  }
}

?>







<body class="bg-dark">

<!-- sideNav -->
 <?php include("side_nav.php");?>

 
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h5 style="color:#dc3545">QUALITY FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                    <form action="quality_form.php" method="POST">
                    <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                    </dv>
                        
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder=" Title">
                        </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="desc" class="form-control" placeholder="Description">
                           </div>

                                <button type="submit" name="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">CREATE</button>
                               <!--  <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


  <?php include("footer.php");?>
