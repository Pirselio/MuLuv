<?php
	  session_start();
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
  <body>
	  <?php
		  $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "MuLuv";
		  $email = $_SESSION['login_user'];
			
		  // Create connection
		  $conn = new mysqli($servername, $username, $password, $dbname);
		  $titolo = $_GET['song'];	
		  //selezine id canzone
		  $sql = "SELECT IDcanzone FROM Canzoni WHERE Titolo = '$titolo'";
		  $result_canzone = $conn->query($sql);
		  $row_canzone = $result_canzone->fetch_assoc();
		  $kcanzone = $row_canzone['IDcanzone'];
		  //selezione id utente
		  $sql = "SELECT IDutente FROM Utenti WHERE Email = '$email'";
		  $result_user = $conn->query($sql);
		  $row_utente = $result_user->fetch_assoc();
		  $kutente = $row_utente['IDutente'];
		  
		  //controllo se gia tra i preferiti
		  $sql = "SELECT * FROM Hatraipreferiti WHERE Kutente = '$kutente' AND Kcanzone = '$kcanzone'";
		  $result = $conn->query($sql);
		  if ($result->num_rows == 0)
		  {
		  
			$sql = "INSERT INTO Hatraipreferiti (Kutente, Kcanzone)
			VALUES('$kutente','$kcanzone')";
			
			if ($conn->query($sql) === TRUE) 
			{
				?><div class = "container">
				    <p><?php echo "Brano aggiunto tra i preferiti."; ?></p>
				    <form action = "IndexHome.php">
				      <input type="submit" value="Home" />
				    </form>
			      </div>
			   <?php
			} 			
			else 
			{
				?><div class = "container">
				  <p><?php echo "Error: " . $sql . "<br>" . $conn->error;?></p>
				  <form action = "IndexHome.php">
				    <input type="submit" value="Home" />
				  </form>
			    </div>
			    <?php
			}
		  }
		  else 
		  {
			$error = "Il brano è già tra i preferiti";
			echo "Il brano è già tra i preferiti";
		  } 
	  ?>
	</body>

</html>
?>
