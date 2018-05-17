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
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Nome FROM Utenti WHERE user = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  if (!$result) 
	  {
		printf("Error: %s\n", mysqli_error($db));
		header("location: IndexLogin.php?badlogin");
	  }
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: IndexHome.php");
      }
      else 
      {
         $error = "Your Login Name or Password is invalid";
         //echo "Username o Password errata!";
		 header("location: IndexLogin.php?badlogin");
      }
   }
   
   
?>
