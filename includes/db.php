<?php 
// After uploading to online server, change this connection accordingly

$con = mysqli_connect("127.0.0.1","root","","ecommerce1");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>