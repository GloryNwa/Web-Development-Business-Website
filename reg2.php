<?php include("header.php");

//  $glory = [
//   'fname' => $_SESSION['fname'],
//   'lname' => $_SESSION['lname'],
//   'email' => $_SESSION['email'],
//   'phone' => $_SESSION['phone'],
//   'phone' => $_SESSION['phone'],

//   'amount' => str_replace(",", "", $_SESSION['option'])
//  ];

// $glory = [
  // $fname = $_SESSION['fname'];
  // $lname = $_SESSION['lname'];
  // $email = $_SESSION['email'];
  // $location = $_SESSION['location'];
  // $phone = $_SESSION['phone'];
  // $option = $_SESSION['option'];

  // 'amount' => str_replace(",", "", $_SESSION['option'])
//  ];
?>
    <!-- end header -->
      <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                  <div class="bg-img" ></div>
              <ul class="breadcrumb">
                <li><a href="index.php" style="color:#ff5821 !important">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Services</li>
              </ul>
              <h2 style="color:#ff5821">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="border: 1px solid #ff5821"></div>

    <!-- /section featured -->

    <section id="content">
      <div class="container">       
         <div class="row">
          <div class="span6">
            <div class="">           
              <div class=" table-responsive">
                <table class="table cart-table">
                 <div class="span6">
                <h4 class="title"><strong>Registration</strong> - Process<span></span></h4>

                
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        First Name
                      </th>
                      <th>
                        Last Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                      Location
                      </th>
                      <th>
                      Message
                      </th>
                      <th>
                      Amount
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="success">
                      <td>
                        1
                      </td>
                      <td>
                      <?php echo $_SESSION['fname'];?>
                      </td>
                      <td>
                      <?php echo $_SESSION['lname'];?>
                      </td>
                      <td>
                    <?php echo $_SESSION['email'];?>
                      </td>
                    
                      <td>
                      <?php echo $_SESSION['phone'];?>
                      </td>
                      <td>
                    <?php echo $_SESSION['location'];?>
                      </td>
                      <td>
                    <?php echo $_SESSION['message'];?>
                      </td>
                      <td>
                      <?php echo $_SESSION['option'];?> 
                   
                      </td><?php
//                       unset($_SESSION['fname']);
// unset($_SESSION['lname']);
// unset($_SESSION['email']); unset($_SESSION['phone']);
// unset($_SESSION['location']); unset($_SESSION['option']);?>

                    </tr>                    
                  </tbody>
                </table>
                FristName<br>
                LastName <br>
                EmailPhone
                 <div class="btn btn-theme btn-block" style="border:none">
                  <a href="paystack.php"><button class="btn btn-cart btn-warning">PROCEED TO CHECKOUT</button></a>
                  </div>
              </div>                                         
          </div>
          </div>
         </div>
       </div>      
        <br> 
    <hr>
    <?php include('footer3.php');?>