<?php include("header.php");

session_start();


if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();


}


?>

<?php
ob_start();


if(isset($_POST['desc'])&&isset($_FILES['file'])){

      $desc = $_POST['desc'];
      $file = $_FILES['file'];


      // $fileExtension =  array('gif','png' ,'jpg', 'jpeg');
   
      // $extension = pathinfo($file, PATHINFO_EXTENSION);
      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "uploads/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            
                $sql = "INSERT INTO webtraining(description, pics, time)";
                $sql .= "VALUES(  
                    
                     '".mysqli_real_escape_string($connection,$desc)."', 
                     '".mysqli_real_escape_string($connection,$target_file)."', 
                     now()
                     )";

                
                   $result = mysqli_query($connection, $sql);
                   if(!$result){
                    echo ("Query Failed" . mysqli_error($connection));exit;
                  

                   } else {
                   $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px;padding-right:50px">Your Post was successfully created!</div>';
                    
                    }

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
                    <h5 style="color:#dc3545">WEB TRAINING  FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                    <form action="webTraining.php" method="POST" enctype="multipart/form-data">
                    <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                        
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="desc" class="form-control" placeholder="Description">
                           </div>
                           <div class="form-group">
                                <label>Picture</label>
                                <input type="file" name="file" class="form-control" placeholder="Upload Picture">
                           </div>

                                <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">Upload</button>
                          </form>
                    </div>
              </div>
        </div>
    </div>


  <?php include("footer.php");?>
