<?php
$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password,"gbank");
if(!$conn){
    die("Connection failed");
}
    ?>