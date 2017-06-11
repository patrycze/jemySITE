<?php
$con=mysqli_connect("localhost","pazura","baran","testgastro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = "select * from klient";

$result = mysqli_query($con,$query);
    echo "<table border='1'><tr><th>Imie</th><th>Nazwisko</th></tr>";

while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Imie'] . "</td>";
  echo "<td>" . $row['Nazwisko'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 