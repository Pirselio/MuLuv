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
            <li class="active"><a href="IndexHome.php">Home</a></li>
            <li><a href="Brani.php">Brani</a></li>
            <li><a href="Autori.php">Autori</a></li>
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
	  $sql = $sql = "SELECT Nome FROM Autori";
	  
	  $result = $conn->query($sql);
	  if ($result->num_rows > 0) 
	  {
	    // stampo i dati di ogni riga
		while($row = $result->fetch_assoc()) 
		{
		  ?>
			<div class="container text-center" id = "Brani">
			  <div class="row content">
		        <div class="col-sm-4 sidenav">
				  <p><strong>"<?php echo $row["Nome"]; ?>"</strong></p>
				  <form action="Artista.php"> 
				  <button class="submit" name = "autore" value = "<?php echo $row["Nome"]; ?>">Vai</button>
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
