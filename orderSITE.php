<!DOCTYPE html>
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

		<link rel="stylesheet" href="css/style.css" >

		<script>
		 function showUser(str) {
		    if (str == "") {
		        document.getElementById("txtHint").innerHTML = "";
		        return;
		    } else {
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("txtHint").innerHTML = this.responseText;
		            }
		        };
		        // if (str == 1) {
		       		xmlhttp.open("GET","getfood2.php?q="+str,true);
		        	xmlhttp.send();
		        // }
		    }
		}
		</script>
		
	</head>

	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<img class="logo" src="images/logo.png">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#slider_section">Start</a></li>
							<li><a href="#about_us_section">O nas</a></li>
							<li><a href="#">Zamów</a></li>
							<li><a href="#">Kontakt</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<section id="choose">
			<div class="container order_container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<form action="order.php" id="main_form" class="form-horizontal" method="post" >

					      	<div class="form-group">
					        	<label class="col-sm-4 control-label" for="food_1">Mięso</label>
				        		<div class="col-sm-8">
									<select id="food_1_1" class="form-control" name="food_1_1" onchange="showUser(this.value)">
										<option value="0">Wybierz rodzaj miesa</option>
										<?php
										require 'config.php';

										$sql = "SELECT menukategoria_id, Nazwa FROM menukategoria";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										    // output data of each row
										    while($row = mysqli_fetch_assoc($result)) {
										    	echo "<option value=\"" .$row['menukategoria_id'] . "\">" . $row['Nazwa'] . "</option>";
										    }
										} else {
										    echo "<option value=\"zero\" disabled>nothing to select</option>";
										}
										mysqli_close($conn);
										?>									
									</select>
					        	</div>
				        		<div class="col-sm-offset-4 col-sm-8" style="margin-top: 20px">
					          		<select id="txtHint" class="form-control" name="food_1_2" onchange="show()">
					          		</select>
					        	</div>
				        		<!-- <div class="col-sm-offset-4 col-sm-8">
					          		<select id="food_1_2" class="form-control" name="food_1_2">
							            <option value="">Kurczak</option>
					          		</select>
					        	</div> -->
					      	</div>
					      	
					      	<div class="form-group">
					        	<label class="col-sm-4 control-label" for="vegetable">Warzywa</label>
				        		<div class="col-sm-8">
					          		<select id="vegetable" class="form-control" name="miasto" onchange="show()">
							            <option value="">
											<?php
										require 'config.php';

										$sql = "select Nazwa FROM menupozycja JOIN menukategoriapozycja ON (menupozycja.menupozycja_id = menukategoriapozycja.menupozycja_id) where menukategoriapozycja.menukategoria_id = 5";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										    while($row = mysqli_fetch_assoc($result)) {
										    	echo "<option value=\"" .$row['Nazwa'] . "\">" . $row['Nazwa'] . "</option>";
										    }
										} else {
										    echo "<option value=\"zero\" disabled>nothing to select</option>";
										}
										mysqli_close($conn);
										?>
										
										</option>  
					          		</select>
					        	</div>
					      	</div>
					      	
							<div class="form-group">
					        	<label class="col-sm-4 control-label" for="reservation_date">Data rezerwacji</label>
					        	<div class="col-sm-8">
					          		<input id="reservation_date" class="form-control" placeholder="YYYY-MM-DD" name="reservation_date" type="date">
					        	</div>
					      	</div>
							
							
					          	<div class="form-group">
					        	<label class="col-sm-4 control-label" for="reservation_hour">Godzina rezerwacji</label>
				        		<div class="col-sm-8">
					          		<select id="reservation_hour" class="form-control" name="godzina">
							            <option value=""></option>
							            <option>8</option>
							            <option>9</option>
							            <option>10</option> 
							            <option>11</option>
							            <option>12</option>
							            <option>13</option>
							            <option>14</option>
							            <option>15</option>
							            <option>16</option>
							            <option>17</option>
							            <option>18</option>
							            <option>19</option>
							            <option>20</option>
							            <option>21</option> 
					          		</select>
					        	</div>
					      	</div>
							
							

					      	<div class="form-group">
					      		<div class="col-sm-6"></div>
					        	<div class="col-sm-3">
					          		<button href="reservationSITE.html" id="submit_button" type="submit" class="btn btn-primary">Zamów</button>
					        	</div>
								<div class="col-sm-3">
								
								    <button id="proceed_1step" type="button" class="btn btn-primary">Rezerwuj miejsce</button>
								</div>
								
								<script>
								function show() {
								var e = document.getElementById("food_1_1");
								var strUser = e.options[e.selectedIndex].text;
								console.log(strUser);
								var c = document.getElementById("txtHint");
								var strUser2 = c.options[c.selectedIndex].text;
								console.log(strUser2);
								var a = document.getElementById("vegetable");
								var strUser3 = a.options[a.selectedIndex].text;
								console.log(strUser3)
								}
								</script>
<script>
  //function myJavascriptFunction(strUser) { 
  //window.location.href = "skrypt.php?first=" + strUser; 
//	}
</script>
		
		<script>
		document.getElementById("proceed_1step").addEventListener("click", function(){	
	
		var e = document.getElementById("food_1_1");
		var strUser = e.options[e.selectedIndex].text;
		console.log(strUser);
		var c = document.getElementById("txtHint");
		var strUser2 = c.options[c.selectedIndex].text;
		console.log(strUser2);
		var a = document.getElementById("vegetable");
		var strUser3 = a.options[a.selectedIndex].text;
		console.log("TYRYRYY");
		 var account = {
			Type: strUser,
			Food: strUser2,
			Vegetable: strUser3
		};
		
		account = JSON.stringify(account);
		account = btoa(unescape(encodeURIComponent(account)));
		location.assign("reservationSITE2.html?a=" + account);
   
		});
		
		</script>
					      	</div>
					    </form>

					</div>
				</div>
			</div>
		</section>

		<!-- CONTACT -->
		<section id="contact_section">
			<div class="container contact_container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<h3 class="contact_header">Kontakt</h3>
						<p class="contact_text">Fusce vestibulum vitae nunc a varius. In at eros et justo rutrum bibendum non id sem. Sed lobortis, arcu ac scelerisque faucibus, mauris ipsum semper dolor, in congue ex nulla eu felis. Nunc at consequat massa. Quisque sit amet est quam. Aenean diam libero, imperdiet eget commodo vel, congue sed turpis. Pellentesque commodo rutrum tincidunt.</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					</div>
				</div>
			</div>
		</section>

	<!-- JQUERY GOOGLE CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- button click -->



	</body>
</html>