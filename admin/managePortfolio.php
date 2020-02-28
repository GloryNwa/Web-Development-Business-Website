
<?php include("header.php");

session_start();


if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();

  }

?>

<body>
<!-- sideNav -->
 <?php include("side_nav.php");?>
    <!-- Left Panel -->
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                       </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>     
                 </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Portforlio</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Portfolio</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                           <th>#</th>
                                            <th>Site URL</th>
                                             <th>Description</th>
                                            <th>Picture</th>
                                            
                                        </tr>
                                    </thead>

                                       <?php $sql = "SELECT * FROM recentjobs ORDER BY id DESC";
                                     $x = 1;
                                     if ($query_run = mysqli_query($connection,$sql)) {
                                     
                                     while($query_row = mysqli_fetch_assoc($query_run)){
                                     
                                      $site = $query_row['site'];
                                      $desc = $query_row['description'];
                                      $pic = $query_row['picture'];
                                      $id = $query_row['id'];

                                     ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $x++;?></td>
                                            <td>
                                              <h4 class="date"><?php echo (substr($site,0,100))?></h4>
                                                   <ul class="nav nav-pills">
                                                  <li role="presentation">
                                                     <a href="editPortfolio.php?id=<?php echo $query_row['id']; ?>">
                                                      <span class="fa fa-pencil" style="color:#009efb;"> Edit</span>  
                                                     </a><br><br><br>
                                                  </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                   <li role="presentation">
                                                      <a onclick='return confirm("Are you really sure?")' href='deletePortfolio.php?id=<?php echo $query_row['id']; ?>'>
                                                       <span class="fa fa-trash" style="color:red;"> Delete</span> 
                                                      </a>
                                                  </li>
                                              </ul>
                
                                            </td>
                                            <td><?php echo $desc;?></td>
                                            <td><img src='<?php echo "uploads/" .$pic;?>' alt="" width="80px" hieght="80px" /></td>
                                            </a>
                                        </tr>
                                        <?php
                                           }
                                        }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                   </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
