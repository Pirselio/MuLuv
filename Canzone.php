<html>
<head>
    <title>Ricerca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<style>
		.checked {
			color: orange;
		}
	</style>
</head>
<body>
	  <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  <!--Titolo-->
		  <div class="navbar-header">
		    <a class="navbar-brand" href="IndexHome.php">muLuv</a>
		  </div>
		  <!--Link ad altro, ul = unordered list, li = list-->
		  <ul class="nav navbar-nav">
            <li class="active"><a href="IndexHome.php">Home</a></li>
            <li><a href="Brani.php">Brani</a></li>
            <li><a href="Autori.php">Autori</a></li>
          </ul>
          <!--Input ricerca-->
          <form class="navbar-form navbar-right" action="Search.php">
		  <!--Testo-->	
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <!--Bottone con icona-->
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
         </form>
        </div>
    </nav>
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
		    <div class="row content">
		    <div class="col-sm-4">
				<h2><?php echo $row["Titolo"]?></h2>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
		      <div class="thumbnail">
			    <p><strong></strong></p>
			    <p>"<?php echo $row["Nome"]; ?>"</p> 
			       <form action = "AddPreferito.php">
				  <button class="submit" name = "song" value = "<?php echo $row["Titolo"]; ?>">Aggiungi</button>
				  </form>
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
</html>
