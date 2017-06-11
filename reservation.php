<?php

$name = $_POST['name'];
$surname = $_POST['Surname'];
$email = $_POST['email'];
$date = $_POST['reservation_date'];
$miasto = $_POST['miasto'];
$godzina = $_POST['godzina'];
$number_of_guests = $_POST['number_of_guests']; 
$tel = $_POST['phoneNumber'];


$con=mysqli_connect("localhost","pazura","baran","testgastro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  switch ($miasto) {
    case "Szczecin":
        $miasto_id = 1;
        break;
    case "Wrocław":
        $miasto_id = 2;
        break;
    case "Warszawa":
        $miasto_id = 3;
        break;
}

	if($number_of_guests > 5)
	{
		$stolik_id = rand(10,20);
	}
	else
	{
		$stolik_id = rand(0,10);
	}
		

$query = "INSERT INTO testgastro.klient (restauracja_id, stolik_id, klient_id, DataRezerwacji, GodzinaRezerwacji) VALUES ('{$miasto_id}','{$stolik_id}','{$stolik_id}','{$date}','{$godzina}')";

echo $query;
mysqli_query($con,$query);
?>