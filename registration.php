<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$con=mysqli_connect("localhost","pazura","","testgastro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = "INSERT INTO testgastro.klient (Imie, Nazwisko, Email, Telefon) VALUES ('{$name}','{$surname}','{$email}','{$tel}')";

echo $query;
mysqli_query($con,$query);
?>