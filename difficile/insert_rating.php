<?php

  // $mysqli = new mysqli('localhost', 'username', 'password', 'nome_database');
  $mysqli = new mysqli('localhost', 'root', ''); //posso omettere nome DB
  if ($mysqli->connect_error) {
  die('Errore di connessione (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
  }
  // Seleziono il database
  $mysqli->query("USE prova");
  
  $rating=3;
  $sql = "UPDATE versamenti SET Importo='$rating' WHERE Importo<10000";
  $result = $mysqli->query($sql);

  
  // Chiudo DB
  $mysqli->close();

?>
