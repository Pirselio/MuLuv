<html>
  <head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="utf-8">
	  <title>muLuv</title>
  </head>
	  
  <body>
	  <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  <!--Titolo-->
		  <div class="navbar-header">
		    <a class="navbar-brand" href="#">muLuv</a>
		  </div>
		  <!--Link ad altro, ul = unordered list, li = list-->
		  <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Brani</a></li>
            <li><a href="#">Autori</a></li>
          </ul>
          <!--Action ricerca-->
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
	  //Effettua la ricerca
	  $query = $_GET['search'];
	  $sql = "SELECT Titolo FROM Canzoni WHERE `Titolo` LIKE '%".$query."%'";
	  
	  $result = $conn->query($sql);
	  if ($result->num_rows > 0) 
	  {
	    // stampo i dati di ogni riga
		while($row = $result->fetch_assoc()) 
		{
		  ?>
			<form action="Canzone.php">
			<div class="container text-center" id = "Brani">
			  <div class="col-sm-4">
				<div class="thumbnail">
				  <p><strong>"<?php echo $row["Titolo"]; ?>"</strong></p>
				  <form action="Canzone.php"> 
				  <button class="submit" name = "song" value = "<?php echo $row["Titolo"]; ?>">Vai</button>
				  </form>
				</div>
			  </div>
			</div>
		  <?php
		}
	  }
		else 
		{
		  echo "0 results";
		}
	  
  ?>
  </body>
</html>
