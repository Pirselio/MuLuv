<!DOCTYPE html>

<!-- Iscrizione -- >

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<html>

    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="check.js"></script>
		<title>Accedi!</title>
    </head>
 
	<body>
	    
		<!--Barra navigazionale-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
			<!--Titolo-->
				<div class="navbar-header">
					<a class="navbar-brand" href="#">MuLuv</a>
				</div>
				<!--Link ad altro, ul = unordered list, li = list-->
				<ul class="nav navbar-nav">
					<?php if(isset($_SESSION['login_user'])){echo "<li><a href=\"#\">Home</a></li>"; } ?>
					<li><a href="IndexRegister.php">Register</a></li>
					<li class="active"><a href="IndexLogin.php">Login</a></li>
				</ul>
			</div>
		</nav>
		
		<form METHOD="POST" action="checkLogin.php" onsubmit="return loginCheck()">
			<div class = "container">
				<label for="email">Indirizzo Email</label>
				<span class="glyphicon glyphicon-envelope"></span>
				<input type="email" class="form-control" id="email" NAME="email" placeholder = "Inserisci Email" required>
			<br>
				<label for="Password">Password</label>
				<span class="glyphicon glyphicon-lock"></span>
				<input type="Password" class="form-control" id="password" NAME="password" placeholder = "Inserisci Password" required>
			<br>
			<?php if(isset($_GET['badlogin'])){ echo '<p style="color:red">Password errata</p>';}?>
				<button type="submit" class="btn btn-danger btn-block">Login</button>
				
			</div>
		</form>
			
	
	</body>
	
</html>  