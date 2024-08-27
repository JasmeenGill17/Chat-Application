<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  // if($conn){
  //   echo"created";
  // }else{
  //   echo"error";
  // }
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
