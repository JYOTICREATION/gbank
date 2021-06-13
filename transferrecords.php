<?php
   include "config.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Bank Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,600;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Including style sheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Icon -->
    
</head>
<body style="background-color:#009688">
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
            <div class="navbar-brand font-weight-bold " id="title" style="color:blue;font-size:2.2em;">
                &nbsp;Express Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:large; color:pink;"> 
                <li class="nav-item">
                        <a class="nav-link hover dark " href="index.php" style="color:black;font-weight:2em;">
                           
                            <span style="padding-right:20px;" >&nbsp;&nbsp;Home</span>
                        </a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="vcustomer.php" style="color:black;font-weight:2em;">
                            
                            View Customers
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transferrecords.php" style="color:black;font-weight:2em;">
                         
                            Transfer Records
                        </a> 
                    </li>  
                </ul> 
            </div>
        </nav> 
    <div>

<div class="usertable">

    <h3 style="margin-left:500px; margin-top:100px;">Transfer Records</h3>
    <table >
          <tr>
            <th>Transfer ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            
          </tr>
          <?php
        $sql = "SELECT * FROM `transfer` ORDER BY transfer_id DESC LIMIT 10";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'a-customer.php'>";
            echo "<td>". $row['transfer_id'] . "</td>
            <td>". $row['sender'] . "</td>
            <td>". $row['receiver'] . "</td>
            <td>". $row['amount'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
    </table>
</div>
<br><br>

</body>




</html>