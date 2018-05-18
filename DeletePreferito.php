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
		  
		  $sql = "DELETE FROM Hatraipreferiti WHERE Kutente = '$kutente' AND Kcanzone = '$kcanzone'";

		  if ($conn->query($sql) === TRUE) 
		  {
			?><div class = "container">
				<p><?php echo "Brano Eliminato con successo."; ?></p>
				<form action = "IndexHome.php">
				  <input type="submit" value="Home" />
				</form>
			  </div>
			  <?php
		  } 
		  else 
		  {
			?><div class = "container">
				<p><?php echo "Errore nell'eliminazione, contattare il DBA immediatamente!"; ?></p>
				<form action = "IndexHome.php">
				  <input type="submit" value="Home" />
				</form>
			  </div>
			  <?php
		  }
	  ?>
	</body>

</html>
?>
