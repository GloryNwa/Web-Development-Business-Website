<?php include("header.php");?>



 <?php

session_start();
ob_start();
// echo md5('richgirlforever');exit;

if(isset($_POST['email'])&&isset($_POST['password'])){

  $email    = $_POST ['email'];
  $password = md5($_POST ['password']);


  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);


  if(!empty($email )&&!empty($password)){



    $query = "SELECT * FROM admin  WHERE email= '{$email}' AND password ='{$password}'";

     $result = mysqli_query($connection, $query);
     if(!$result){

      die("Query Failed" . mysqli_error($connection));
     }

  
      $query_num_rows = mysqli_num_rows($result);
          if ($query_num_rows==0) {
  
          $_SESSION['alert'] ='<h4 style="text-align:center;color:#CA3433; font-size:14px";>Invalid email or password combination. Please fill in your correct login details!</h4>';

          }else if ($query_num_rows==1){
         
            $_SESSION['password'] = 'richgirlforever';
            // Redirect user to index.php
            header("Location:dashboard.php");exit();

     }else{
    
        $_SESSION['alert'] ='<h4 style="text-align:center; color:red; font-size:15px";>You are not loggedin, please log in!</h4>';

           header("Location: ../index.php");exit();
    
     }


  }

}


?>




<body class="bg-dark">

<!-- sideNav -->
 

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header" style="background-color:#fff">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="images/brilliantt.PNG" alt="Logo"></a>
              <!--   <a class="navbar-brand hidden" href=""><img src="images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                    
                        <a href="#"><i class="menu-icon fa fa-dashboard"></i>ADMIN LOGIN</a>
                    </li>
               <!--      <h3 class="menu-title">ADmin Dashboard</h3> --><!-- /.menu-title -->                   
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h5 style="color:#dc3545">ADMIN LOGIN AREA</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                    <form action="login.php" method="POST">
                     <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                    </dv>
                        
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                               <!--  <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <!-- <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
 -->
                              <!--   </div>  -->
                                <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">LOGIN</button>
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
               <div class="span10" style="color:#fff; width: 50%">
               <div class="clearfix"></div>
              
               <hr>
              <h5 style="color:#fff">Number Guesser Game</h5>
              <div id="game">
             <p style="color:#fff;">Guess a number between <span class="min-num"></span> and <span class="max-num"></span></p>
             <input type="number" id="guess-input" placeholder="Enter your guess.........">
              <input type="submit" value="submit" id="guess-btn"style="background-color:#dc3545; color: #fff;border:none; border-radius:2px; margin-bottom:8px">
             <p class="message"></p>
            </div>
          </div>
            </div>

        </div>
    </div>


   <script src="../js/guesser.js"></script>
  <?php include("footer.php");?>
