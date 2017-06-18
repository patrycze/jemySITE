<?php

$con=mysqli_connect("localhost","pazura","baran","testgastro");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
$query = "UPDATE testgastro.rezerwacja SET Status = 0";
//echo $query;
mysqli_query($con,$query);
?>