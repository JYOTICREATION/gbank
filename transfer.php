<?php
session_start();
include "config.php" ;


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Bank| Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,600;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    
</head>
<body style="background-color: #009688" >
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#8ae6dc
; opacity:4;"> 
           
           &nbsp;
           <div class="navbar-brand font-weight-bold " id="title"  style="color:#800000;font-size:2.2em;">
               &nbsp;Express Bank
           </div>
           <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
               <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:large; color:pink;"> 
               <li class="nav-item">
                       <a class="nav-link hover dark " href="index.php" style="color:#800000;font-weight:2em;">
                          
                           <span style="padding-right:20px;" >&nbsp;&nbsp;Home</span>
                       </a> 
                   </li> 
                   <li class="nav-item">
                       <a class="nav-link" href="vcustomer.php" style="color:#800000;font-weight:2em;">
                           
                           View Customers
                       </a> 
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="transferrecords.php" style="color:#800000;font-weight:2em;">
                        
                           Transfer Records
                       </a> 
                   </li>  
               </ul> 
           </div>
       </nav> 
    
    <div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


</body>
</html>

<?php

$sql = "SELECT current_balance FROM customers WHERE name='$sender'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($amount>$row["current_balance"] or $row["current_balance"]-$amount<100){
    echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'vcustomer.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customers` SET current_balance=(current_balance-$amount) WHERE Name='$sender'";
    

if ($conn->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 
  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `customers` SET current_balance=(current_balance+$amount) WHERE name='$receiver'";

if ($conn->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $conn->error;
}
}
if($flag==true){
$sql = "INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$sender','$receiver','$amount')";
if ($conn->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $conn->error;
}
}
}
if($flag==true){
echo "<script>swal('Transfered!', 'Transaction Successfull','success').then(function() { window. location = 'vcustomer.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>