<!--Interfaccia Home utente-->
<!--https://www.w3schools.com/php/showphpfile.asp?filename=demo_db_select_oo_table-->

<?php
  session_start();
?>
<html>
  <head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="utf-8">
	  <title>MuLuv</title>
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
					<li><?php if(isset($_SESSION['login_user'])){echo "<li><a href=\"Logout.php\">Logout</a></li>"; } ?></li>
				</ul>
				<!--Input ricerca-->
				
				
				<form class="navbar-form navbar-right" action="/action_page.php">
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
		
		<div class="preferiti"><h2 id="headpref">I tuoi preferiti:</h2>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "MuLuv";
			$email = $_SESSION['login_user'];

			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			die("Connection failed: " . $conn->connect_error);
			}
			// $sql2 = "SELECT IDutente FROM Utenti";
			//$id_utente = mysqli_query($db,$sql2);
			//selezione i preferiti dell'utente
			$sql = "SELECT Titolo, Autori.Nome FROM Canzoni, Hatraipreferiti, Utenti, Autori, Fattada WHERE Email= '$email' AND Hatraipreferiti.Kutente = IDutente AND Hatraipreferiti.Kcanzone= IDcanzone AND Fattada.Kcanzone = IDcanzone AND Fattada.Kautore = IDautore";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
			// output data of each row
				while($row = $result->fetch_assoc()) 
				{
				  ?>
				  <div class="Brani">
					<p><strong><?php echo $row["Titolo"]; ?></strong> di <?php echo $row["Nome"]; ?></p> 
					<button class="btn">Vai</button>
				  </div>
				  <?php
				}
			}
			else 
			{
			echo "0 results";
			}
			$conn->close();
		?>
		</div>
  </body>
  
</html>