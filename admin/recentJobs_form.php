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


if(isset($_POST['site'])&&isset($_FILES['file'])){
      $site = $_POST['site'];
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
                            
                $sql = "INSERT INTO recentjobs(site, description, picture)";
                $sql .= "VALUES(  
                     '".mysqli_real_escape_string($connection,$site)."',
                     '".mysqli_real_escape_string($connection,$desc)."',
                     '".mysqli_real_escape_string($connection,$target_file)."' 
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
                    <h5 style="color:#dc3545">RECENT JOBS FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                <dv class="alert">
                <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                       </dv>
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <label>Site Url</label>
                                <input type="text" name="site" class="form-control" placeholder="https://www.diakrino.com" maxlength="60">
                           </div>
                           <div class="form-group">
                                <label>Site Description</label>
                                <input type="text" name="desc" class="form-control" placeholder="eCormerce site develop for flowers online shop ...." maxlength="100">
                           </div>
                           <div class="form-group">
                                <label>PHOTO</label>
                                <input type="file" name="file" class="form-control" placeholder="Password">
                           </div>

                                <button type="submit" name="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">CREATE</button>
                        </form>
                    </div>
               </div>
        </div>
    </div>

  <?php include("footer.php");?>
