<html>
<head>
    <title>Ricerca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.checked {
			color: orange;
		}
	</style>
</head>
<body>
	<h2>Star Rating</h2>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star"></span>
	<span class="fa fa-star"></span>
	<h2>Canzone</h2>
	<img src="" alt="" width="500" height="377">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "MuLuv";  
  //Crea connection
  $conn = new mysqli($servername, $username, $password, $dbname);	
  $titolo = $_GET['song'];	
  // query
  $sql = "SELECT Titolo, Nome FROM Canzoni, Autori, Fattada WHERE Fattada.Kcanzone = IDcanzone AND Fattada.Kautore = IDautore AND Titolo = '$titolo'";
  
		
	//risultato della query
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// stampo i dati di ogni riga del dynaset
		while($row = $result->fetch_assoc()) 
		{
		  ?>
		  <div class="container text-center" id = "Brani">
		    <div class="col-sm-4">
		      <div class="thumbnail">
			    <p><strong>"<?php echo $row["Titolo"]; ?>"</strong></p>
			    <p>"<?php echo $row["Nome"]; ?>"</p> 
			    <button class="btn">Vai</button>
		      </div>
		    </div>
	      </div>
	      <?php  
		}
	} else {
		echo "0 results";
	}
		
	// Chiudo DB
	$conn->close();
?>
</body>
</html>
