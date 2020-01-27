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
         $query = "SELECT testimoni, name, url FROM testimony WHERE `id`='$id'";
          if ($query_run = mysqli_query($connection, $query)) {
          while($query_row = mysqli_fetch_assoc($query_run)){
             
              $test = $query_row['testimoni'];
              $name = $query_row['name'];
              $url = $query_row['url'];                
      
      }
    }
  ?>


<?php
$id  = $_GET['id'];
 if(isset($_POST['testimony']) &&isset($_POST['name']) &&isset($_POST['url'])){
  // echo "string";exit;
      $test = $_POST['testimony'];
      $name = $_POST['name'];
      $url = $_POST['url'];

       if(!empty($test)&&!empty($name)&&!empty($url)){
                            

         $query = "UPDATE testimony SET testimoni = '".$test."', name = '".$name."', url = '".$url."' WHERE id=$id";
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo ("Query Failed" . mysqli_error($connection));exit;
            }else{               
              $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
              header('Location:manageTestimonial.php');
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
                    <h5 style="color:#dc3545">EDIT TESTIMONIAL FORM</h5>
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
                            <input type="text" name="testimony" class="form-control"  value="<?php echo $test;?>">
                        </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                           </div>
                           <div class="form-group">
                                <label>Website Url</label>
                                <input type="text" name="url" class="form-control" value="<?php echo $url;?>">
                           </div>

                                <button type="submit" name="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">UPDATE</button>
                          </form>
                    </div>
              </div>
        </div>
    </div>


  <?php include("footer.php");?>
