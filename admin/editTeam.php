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
         $query = "SELECT name, pics, position, twitter, facebook,instagram, github FROM team WHERE id='$id'";

          if ($query_run = mysqli_query($connection, $query)) {

          while($row = mysqli_fetch_assoc($query_run)){
              $name     = $row['name'];
              $post     = $row['position'];
              $twitter  = $row['twitter'];
              $facebook = $row['facebook'];
              $instagram = $row['instagram'];
              $git      = $row['github'];
              $file     = $row['pics'];
      }
    }
  ?>


<?php
$id  = $_GET['id'];
 if(isset($_POST['name'])&&isset($_POST['post'])&&isset($_POST['twitter'])&&isset($_POST['facebook'])&&isset($_POST['instagram'])&&isset($_POST['git'])&&isset($_FILES['file'])){
  

      $name     = $_POST['name'];
      $post     = $_POST['post'];
      $twitter  = $_POST['twitter'];
      $facebook = $_POST['facebook'];
      $git      = $_POST['git'];
      $file     = $_FILES['file'];


      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "teamPics/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            

         $query = "UPDATE team SET name = '".$name."', position = '".$post."', twitter = '".$twitter."', facebook = '".$facebook."',instagram = '".$instagram."', github = '".$git."', pics = '".$target_file."' WHERE id=$id";
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo ("Query Failed" . mysqli_error($connection));exit;
            }else{               
              $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
              header('Location:manageTeam.php');
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
                    <h5 style="color:#dc3545">EDIT TEAM FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                    </dv>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                        </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="post" class="form-control" value="<?php echo $post;?>">
                           </div>
                           <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="<?php echo $twitter;?>">
                        </div>
                            <div class="form-group">
                                <label>Facebook Url</label>
                                <input type="text" name="facebook" class="form-control" value="<?php echo $facebook;?>">
                           </div>
                            <div class="form-group">
                                <label>Instagram Url</label>
                                <input type="text" name="instagram" class="form-control" value="<?php echo $instagram;?>">
                           </div>
                           <div class="form-group">
                            <label>Git Hub Url</label>
                            <input type="text" name="git" class="form-control" value="<?php echo $git;?>">
                        </div>
                            
                           <div class="form-group">
                                <label>Picture</label>
                                <input type="file" name="file" class="form-control" value="<?php echo 'teamPics/' .$pic;?>" alt="" width="80px" hieght="80px" >
                           </div>

                                <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">UPLOAD</button>
                          </form>
                    </div>
              </div>
        </div>
    </div>


  <?php include("footer.php");?>
