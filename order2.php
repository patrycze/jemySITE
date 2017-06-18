<?php
require 'config.php';
if ($_GET['q'] == 0) {
	echo "<option value=\"zero\" disabled>nothing to select</option>";
}
else {
	$sql = "select Nazwa FROM menupozycja JOIN menukategoriapozycja ON (menupozycja.menupozycja_id = menukategoriapozycja.menupozycja_id) where menukategoriapozycja.menukategoria_id = {$_GET['q']}";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<option>" . $row['Nazwa'] . "</option>";
	    }
	} else {
	    echo "<option value=\"zero\" disabled>nothing to select</option>";
	}
} 
mysqli_close($conn);
?>