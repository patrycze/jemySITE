<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<title>IO PPazura MZagorski</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Patryk Pazura, Mateusz Zagórski">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  		<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
		<link rel="stylesheet" href="css/style.css" >
	</head>

	<body>
		<!-- HEADER NAVIGATION -->
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a href="index_notuser.html"><img class="logo" src="images/logo.png"></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index_notuser.html">Wróć</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<div class="container login_container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3"></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="login_header">
						<h1>Login</h1> 
					</div>
					<form id="formid" class="login_form" action="login.php" method="POST">
						<div class="login_form_container">
					      	<div class="form-group">
								<label class="col-sm-4 control-label" for="Name">Imie:</label> 
								<input class="form-control" placeholder="Imie" name="Name" type="text" id="name" />
							</div>
					      	<div class="form-group">
								<label class="col-sm-4 control-label" for="Surname">Nazwisko:</label> 
								<input class="form-control" placeholder="Nazwisko" name="Surname"  type="text" id="surname" />
							</div>
					      	<div class="form-group">
								<label class="col-sm-4 control-label" for="password">Hasło:</label> 
								<input class="form-control" placeholder="Haslo" name="Password"  type="text" id="pass"/>
							</div>
					      	<div class="form-group">
					      		<button id="login" type="submit" class="btn btn-primary">Zaloguj</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3"></div>
			</div>
		</div>
	
		<!-- JQUERY GOOGLE CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
