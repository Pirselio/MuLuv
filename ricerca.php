<html>
<head>
    <title>Ricerca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
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
	
	$min_length = 3;
    // lunghezza minima query
     
    if(strlen($query) >= $min_length){ // se la lunghezza della query è superiore al minimo
         
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
				echo "Codice: " . $row["Codice"]. " - Denominazione: " . $row["Denominazione"]. " -Indirizzo" . $row["Indirizzo"]." -Comune" . $row["Comune"]." -Settore" . $row["Settore"]. "<br>";  
			}
		} else {
			echo "0 results";
		}
		
    }
    else{ // se la lunghezza della query è inferiore al minimo
        echo "Minimum length is ".$min_length;
    }
	
	// Chiudo DB
	$mysqli->close();
?>
</body>
</html>