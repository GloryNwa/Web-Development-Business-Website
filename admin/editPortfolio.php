<?php include("header.php");

session_start();


if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();
}
?>


<?php
     $id  = $_GET['id'];
         $query = "SELECT site, picture, description FROM recentjobs WHERE `id`='$id'";
          if ($query_run = mysqli_query($connection, $query)) {
          while($query_row = mysqli_fetch_assoc($query_run)){
             
              $site = $query_row['site'];
              $desc = $query_row['description'];
              $pic = $query_row['picture'];                
      
      }
    }
  ?>


<?php
$id  = $_GET['id'];
 if(isset($_POST['site']) &&isset($_POST['desc']) &&isset($_FILES['file'])){
  // echo "string";exit;
      $site = $_POST['site'];
      $desc = $_POST['desc'];
      $file = $_FILES['file'];

      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "uploads/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            

         $query = "UPDATE recentjobs SET site = '".$site."', description = '".$desc."', picture = '".$target_file."' WHERE id=$id";
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo ("Query Failed" . mysqli_error($connection));exit;
            }else{               
              $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
              header('Location:managePortfolio.php');
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
                    <h5 style="color:#dc3545">EDIT PORTFOLIO</h5>
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
                                <label>Site Name</label>
                                <input type="text" name="site" class="form-control" value="<?php echo $site;?>" placeholder="www.example.com">
                           </div>
                           <div class="form-group">
                                <label>Site Description</label>
                                <input type="text" name="desc" class="form-control" value="<?php echo $desc;?>" placeholder="an online store developed by us">
                           </div>
                           <div class="form-group">
                                <label>PHOTO</label>
                                <input type="file" name="file" class="form-control" value="<?php echo 'uploads/' .$pic;?>" alt="" width="80px" hieght="80px" placeholder="Password">
                           </div>

                                <button type="submit" name="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">Update</button>
                        </form>
                    </div>
               </div>
        </div>
    </div>

  <?php include("footer.php");?>


  <?php


     // $id  = $_GET['id'];

     

