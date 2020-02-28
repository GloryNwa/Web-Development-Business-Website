<?php
include("header.php");

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_778960c83ee385514dd66ada352f04ca69d98a9d",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
	// there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  //  echo '<h5 style="text-align:center;color:green; margin-top:50px;">Transaction successful. 
  //  Thank you for doing bussiness with us! <br><br><br><br><img src="img/tenorr.gif"></h5>';
   
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  $sql = "INSERT INTO training(firstname,lastname,
  email,phone,
  location, amount,message,
  time)";

$sql .= "VALUES('".mysqli_real_escape_string($connection,$_SESSION['fname'] )."',
'".mysqli_real_escape_string($connection, $_SESSION['lname'] )."',
'".mysqli_real_escape_string($connection, $_SESSION['email']) ."',
'".mysqli_real_escape_string($connection, $_SESSION['phone'])."',                      
'".mysqli_real_escape_string($connection, $_SESSION['location'])."', 
'".mysqli_real_escape_string($connection, $_SESSION['message'])."',   
'".mysqli_real_escape_string($connection, $_SESSION['option'])."',                   
now())";


$rest = mysqli_query($connection,$sql);
if(!$rest){

 echo ('Query failed'.mysqli_error($connection));exit;
}else{                         
  echo '<h5 style="text-align:center;color:green; margin-top:50px;">Transaction successful. Thank you for doing bussiness with us! <br><br><br><br><img src="img/tenorr.gif"></h5>';


  unset($_SESSION['fname']);
  unset($_SESSION['lname']);
  unset($_SESSION['email']);
  unset($_SESSION['phone']);
  unset($_SESSION['location']);
  unset($_SESSION['message']);
  unset($_SESSION['option']);  


           }	
           
         
  
}

// echo $_POST['fname'];


 ?>

     
      <div class="container">
      
           
      
      </div><br><br>

      <?php include('footer4.php');?>
