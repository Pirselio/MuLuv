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
		<title>Iscriviti!</title>
		<script src="check.js"></script>
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
					<?php //if(isset($_SESSION['login_user'])){echo "<li><a href=\"#\">Home</a></li>"; } ?>
					<li class="active"><a href="IndexRegister.php">Register</a></li>
					<li><a href="IndexLogIn.php">Login</a></li>
				</ul>
			</div>
		</nav>
	
		<form method="POST" action="checkRegister.php" onsubmit="return registerCheck()">
			<div class="container">
				<label for="nome">Nome</label>
				<span class="glyphicon glyphicon-glyphicon glyphicon-user"></span>
				<input type="text" class="form-control" id="nome" name="nome" required>
			<br>
				<label for="cognome">Cognome</label>
				<span class="glyphicon glyphicon-glyphicon glyphicon-user"></span>
				<input type="text" class="form-control" id="cognome" name="cognome" required>
			<br>
				<label for="pwd">Password</label>
				<span class="glyphicon glyphicon-lock"></span>
				<input type="password" class="form-control" id="pwd" name="pwd" required>
			<br>
				<label for="pwd2">Controllo Password</label>
				<span class="glyphicon glyphicon-lock"></span>
				<input type="password" class="form-control" id="pwd2" name="pwd2" required>
			<br>
				<label for="usr">Email</label>
				<span class="glyphicon glyphicon-envelope"></span>
				<input type="email" class="form-control" id="usr" name="usr" required>
			<br>
				<input type="submit" class="btn btn-danger btn-block" value="Registrati">
			</div>
		</form>
	</body>
	
</html>
