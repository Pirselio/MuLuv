<!DOCTYPE html>
<html>
	
	<head>
		<title>Connessione Attraverso php</title>
	</head>
	
	<body>
		<h1>Risultato: </h1>
		
		 <?php
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
?> 
	</body>

</html>