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
	// il login andrebbe gestito con la session
	// $mysqli = new mysqli('localhost', 'username', 'password', 'nome_database');
	$mysqli = new mysqli('localhost', 'root', ''); //posso omettere nome DB
	if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
	}
	
	// Seleziono il database
	$mysqli->query("USE prova");
	
    $query = $_GET['query']; 
    // Salvo il valore inviato tramite il metodo GET
         
    $query = htmlspecialchars($query); 
    // converte i caratteri utilizzati in html nei loro equivalenti, per esempio: < to &gt;
     
	// controllo injection	
		
	// query
	$sql = "SELECT * FROM Aziende WHERE `Denominazione` LIKE '%".$query."%'";
		
	//risultato della query
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		// stampo i dati di ogni riga del dynaset
		while($row = $result->fetch_assoc()) {
			echo "<br>"."Codice: ". $row["Codice"]."<br>". " - Denominazione: " . $row["Denominazione"]."<br>". " -Indirizzo" . $row["Indirizzo"]."<br>"." -Comune" . $row["Comune"]."<br>"." -Settore" . $row["Settore"]. "<br>";  
		}
	} else {
		echo "0 results";
	}
		
	// Chiudo DB
	$mysqli->close();
?>
</body>
</html>