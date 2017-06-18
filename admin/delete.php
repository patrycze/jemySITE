<?php

$type = $_POST['food_1_1'];

//$godzina = $godzina.':00:00';

//echo $type;


$con=mysqli_connect("localhost","pazura","baran","testgastro");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
$query = "DELETE FROM testgastro.menupozycja WHERE menupozycja_id = '{$type}'";
echo $query;

//mysqli_query($con,$query);
/*
$query = "SELECT count(zamowienie_id) from testgastro.zamowienie";
$rel = mysqli_query($con,$query);
$rel1=mysqli_fetch_assoc($rel);
$number=$rel1['count(zamowienie_id)'];
//echo $number;


$query = "SELECT menupozycja_id from testgastro.menupozycja where Nazwa = '{$food}'";
$rel = mysqli_query($con,$query);
$rel1=mysqli_fetch_assoc($rel);
$food1=$rel1['menupozycja_id'];
echo $food1;

$query = "SELECT menupozycja_id from testgastro.menupozycja where Nazwa = '{$vegetable}'";
$rel = mysqli_query($con,$query);
$rel1=mysqli_fetch_assoc($rel);
$food2=$rel1['menupozycja_id'];
echo $food2;



$query = "INSERT INTO testgastro.zamowieniepozycja(zamowienie_id, menupozycja_id) VALUES ('{$number}','{$food1}')";
//echo $query;
mysqli_query($con,$query);


$query = "INSERT INTO testgastro.zamowieniepozycja(zamowienie_id, menupozycja_id) VALUES ('{$number}','{$food2}')";
//echo $query;
mysqli_query($con,$query);

*/
echo file_get_contents("index_admin.php");
?>