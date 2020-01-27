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

  $test = $_POST["testimony"];
  $name = $_POST['name'];
  $url = $_POST['url'];


  if(!empty($test)&&!empty($name)&&!empty($url)){

    $sql = "INSERT INTO testimony(testimoni, name, url, time)";
    $sql .= "VALUES(  
         '".mysqli_real_escape_string($connection,$test)."',
         '".mysqli_real_escape_string($connection,$name)."', 
         '".mysqli_real_escape_string($connection,$url)."', 
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
                    <h5 style="color:#dc3545">TESTIMONIAL FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                 <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                    </dv>
                <div class="login-form">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Testimony</label>
                            <input type="text" name="testimony" class="form-control" placeholder=" Testimony">
                        </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Mr Alex General Manager, Alex Nigeria Ltd.">
                           </div>
                           <div class="form-group">
                                <label>Website Url</label>
                                <input type="text" name="url" class="form-control" placeholder="www.example.com">
                           </div>

                                <button type="submit" name="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">CREATE</button>
                          </form>
                    </div>
              </div>
        </div>
    </div>


  <?php include("footer.php");?>
