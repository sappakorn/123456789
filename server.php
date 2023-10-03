<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database = "database01";
$conn = mysqli_connect($servername,$username,$pass,$database);

if(!$conn){
   echo "Connection failed:".mysqli_connect_error() ;
}else{
   
}



?>