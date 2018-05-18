<html>
<head>
  <link rel="stylesheet" type="text/css" href="rating_style.css">
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="star1.png";
      }
   }

</script>
  
</head>

<body>

<h1>Star Rating System Using PHP and JavaScript</h1>

<?php
	// $mysqli = new mysqli('localhost', 'username', 'password', 'nome_database');
	$mysqli = new mysqli('localhost', 'root', ''); //posso omettere nome DB
	if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
	}

    $mysqli->query("USE prova");
		
	// query
	$sql = "SELECT avg(Importo FROM versamenti)";
		
	//risultato della query
	$result = $mysqli->query($sql);
  
?>

<form method="post" action="insert_rating.php">
  <p id="total_votes">Total Votes:</p>
  <div class="div">
	  <p>PHP bella</p>
	  <input type="hidden" id="php1_hidden" value="1">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php1" class="php">
	  <input type="hidden" id="php2_hidden" value="2">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php2" class="php">
	  <input type="hidden" id="php3_hidden" value="3">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php3" class="php">
	  <input type="hidden" id="php4_hidden" value="4">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php4" class="php">
	  <input type="hidden" id="php5_hidden" value="5">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php5" class="php">
  </div>

  <input type="hidden" name="phprating" id="phprating" value="0">
  <input type="submit" value="Submit" name="submit_rating">

</form> 

</body>
</html>