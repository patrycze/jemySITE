<?php
	$servername = "localhost";
	$username = "pazura";
	$password = "baran";
	$dbname = "testgastro";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="../images/favicon.png">
		<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
		<title>IO PPazura MZagorski</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Patryk Pazura, Mateusz Zagórski">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" href="../css/style.css" >
	</head>
	
	<body>
		<!-- HEADER NAVIGATION -->
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a href="index_admin.html"><img class="logo" src="../images/logo.png"></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#database_buttons">Baza</a></li>
							<li><a href="sala.php">Sala</a></li>
							<li><a href="loginSITE.php">Rezerwacja</a></li>
							<li><a href="../index.html">Przejdź do strony</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div id="database_buttons" class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2" style="margin-top: 150px;">
			<h1>ZAWARTOSC BAZY WIDOCZNA PO NACISNIECIU BUTTONOW</h1>
		
		<form action="delete.php" id="main_form" class="form-horizontal" method="post" >
						<div class="form-group">
					        	<label class="col-sm-4 control-label" for="food_1">Dania</label>
				        		<div class="col-sm-8">
									<select id="food_1_1" class="form-control" name="food_1_1">
										<option value="0">Wybierz danie do usunięcia</option>
										<?php
										require 'config.php';

										$sql = "SELECT menupozycja_id, Nazwa FROM menupozycja";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {	
										echo "<option value=\"" .$row['menupozycja_id'] . "\">" . $row['Nazwa'] . "</option>";
							    }
										} else {
										    echo "<option value=\"zero\" disabled>nothing to select</option>";
										}
										mysqli_close($conn);
										?>									
									</select>
									
					        	</div>
								
								
				        		<!-- <div class="col-sm-offset-4 col-sm-8">
					          		<select id="food_1_2" class="form-control" name="food_1_2">
							            <option value="">Kurczak</option>
					          		</select>
					        	</div> -->
								
							<button  id="submit_button" type="submit" class="btn btn-primary">Usuń</button>
					      	</div>
				        		
		</form>

		<!-- JQUERY GOOGLE CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		</body>
</html>