<?php include("header.php");

session_start();


if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();


}


?>


<body class="bg-dark">

<!-- sideNav -->
 <?php include("side_nav.php");?>


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h5 style="color:#dc3545">ABOUT FORM</h5>
                    <p style="border:1px dotted white"></p>
                </div>
                <div class="login-form">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Testimony</label>
                            <input type="text" name="title" class="form-control" placeholder=" Title">
                        </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Mr Alex General Manager, Alex Nigeria Ltd.">
                           </div>
                           <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="desc" class="form-control" placeholder="www.example.com">
                           </div>

                                <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">CREATE</button>
                          </form>
                    </div>
              </div>
        </div>
    </div>


  <?php include("footer.php");?>
