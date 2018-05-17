<?php
   
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'MuLuv');

   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
  
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      //mysqli_real_escape_string = formatta una stringa per renderla legale in mysql
	  $mynome = mysqli_real_escape_string($db,$_POST['nome']);
	  $mycognome = mysqli_real_escape_string($db,$_POST['cognome']);
      $myusername = mysqli_real_escape_string($db,$_POST['usr']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['pwd']);
	  $checkpassword = mysqli_real_escape_string($db,$_POST['pwd2']);
	  
	  if($mypassword == $checkpassword){ //controllo password backhand
		
		$sql = "SELECT Nome, Cognome, User FROM Utenti WHERE User = '$myusername'";
		$result = mysqli_query($db,$sql);
		
		if (!$result) 
		{
			printf("Error: %s\n", mysqli_error($db));
			exit();
		}
		
		$count = mysqli_num_rows($result); //0 righe significa che l'email è utilizzabile
			
		if($count == 0) 
		{
			//session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			
			// TODO: manca l'SQL per la registrazione
			$sql = "INSERT INTO utenti(User,Password,Nome,Cognome)
			VALUES('$myusername','$mypassword','$mynome','$mycognome')";
			$result = mysqli_query($db,$sql);
			
			if (!$result) {
				printf("Error: %s\n", mysqli_error($db));
				exit();
			}
			
			
			echo "Registrazione avvenuta!";
			
			//header("location: welcome.php");
		}
		else 
		{
			$error = "Email already registered";
			echo "Email già utilizzata";
		}
	  }else{
			$error = "Different passwords in input";
			echo "Le password non corrispondono";
	  }
   }
   
   
?>
