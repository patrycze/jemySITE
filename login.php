<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Imie:</label> 
				<input type="text" id="name" name="name" />
			</p>
			
			<p>
				<label>Nazwisko:</label> 
				<input type="text" id="surname" name="surname" />
			</p>
			<p>
				<input type="submit" id="btn" value="Login" />
			</p>
		</form>
	</div>
</body>
</html>
