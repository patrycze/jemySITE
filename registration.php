<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pass = $_POST['pass'];

$con=mysqli_connect("localhost","pazura","baran","testgastro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = "INSERT INTO testgastro.klient (Imie, Nazwisko, Email, Telefon, Password) VALUES ('{$name}','{$surname}','{$email}','{$tel}', '{$pass}')";

echo $query;
mysqli_query($con,$query);
?>