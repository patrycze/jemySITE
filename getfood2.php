<?php
require 'config.php';
if ($_GET['q'] == 0) {
	echo "<option value=\"zero\" disabled>nothing to select</option>";
}
else if ($_GET['q'] == 1) {
	$sql = "select Nazwa FROM menupozycja";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<option>" . $row['Nazwa'] . "</option>";
	    }
	} else {
	    echo "<option value=\"zero\" disabled>nothing to select</option>";
	}
} else if ($_GET['q'] == 2) {
	$sql = "select Nazwa FROM menupozycja";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<option>" . $row['Nazwa'] . "</option>";
	    }
	} else {
	    echo "<option value=\"zero\" disabled>nothing to select</option>";
	}
} else if ($_GET['q'] == 3) {
	$sql = "select * FROM menupozycja";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<option>" . $row['id'] . "</option>";
	    }
	} else {
	    echo "<option value=\"zero\" disabled>nothing to select</option>";
	}
} else {
	$sql = "SELECT id FROM MIESO";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<option>" . $row['id'] . "</option>";
	    }
	} else {
	    echo "<option value=\"zero\" disabled>nothing to select</option>";
	}
}
mysqli_close($conn);
?>