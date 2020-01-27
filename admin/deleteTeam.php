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
         $query = "DELETE FROM team WHERE `id`='$id'";
                if ($query_run = mysqli_query($connection,$query)) {
                 $_SESSION['alert'] ='<div class="alert alert-success">Post deleted successfully.</div>';
                 header('Location:manageTeam.php');

      }


  ?>