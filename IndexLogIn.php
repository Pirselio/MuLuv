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
    </head>

	<body>
		
			<div class = "container">
				<form action="Login.php" METHOD="POST">
				<label for="email">Indirizzo Email</label>
				<span class="glyphicon glyphicon-envelope"></span>
				<input type="email" class="form-control" NAME=email placeholder = "Inserisci Email">
			<br>
				<label for="Password">Password</label>
				<span class="glyphicon glyphicon-lock"></span>
				<input type="Password" class="form-control" NAME=password placeholder = "Inserisci Password">
			<br>
				<button type="submit" class="btn btn-danger btn-block">Login</button>
				
			</div>
			</form>
			
	
	</body>
	
</html>
