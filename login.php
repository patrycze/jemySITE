<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>

<body>
	
	<div class="header">
	<h2>Register</h2> 
	</div>
	
		<form action="registration.php" method="POST">

		<div class="frm">	
			<p>
				<label>Imie:</label> 
				<input type="text" id="name" name="name" />
			</p>
			
			<p>
				<label>Nazwisko:</label> 
				<input type="text" id="surname" name="surname" />
			</p>
			<p>
				<label>Email:</label> 
				<input type="text" id="email" name="email" />
			</p>
			<p>
				<label>Telefon:</label> 
				<input type="text" id="tel" name="tel" />
			</p>
			<p>
				<label></label> 
			</p>
			<p>
				<button type="submit" id="btn">Register</button>
			</p>
		</div>
		</form>

</body>
</html>
