<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['pass'];

$name = stripcslashes($name);
$surname = stripcslashes($surname);
$pass = stripcslashes($pass);

$con=mysqli_connect("localhost","pazura","baran","testgastro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "select * from testgastro.klient where Imie = '$name' and Nazwisko = '$surname' and Password = '$pass'";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_assoc($result);
if($row['Imie'] == $name && $row['Nazwisko'] == $surname && $row['Password'] == $pass) {
//echo "Login success!!! Welcome ".$row['Imie'];
echo file_get_contents("index.html");
};

?>