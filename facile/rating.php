<html>
<head>
</head>
<body>
<?php
	
		
	//risultato della query
	$result = 5;
	
	
	echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
	
	switch ($result) {
    case $result=0:
        echo "<span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>";
        break;
    case $result=1:
        echo "<span class='fa fa-star checked'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>";
        break;
    case $result=2:
        echo "<span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>";
        break;
    case $result=3:
        echo "<span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star'></span>
			  <span class='fa fa-star'></span>";
        break;
	case $result=4:
        echo "<span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star'></span>";
        break;
	case $result=5:
        echo "<span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>
			  <span class='fa fa-star checked'></span>";
        break;
	}
		
	// Chiudo DB
	
?>
</body>
</html>