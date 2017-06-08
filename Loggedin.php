<?php
//Startar session så att den är igång på sidan
   session_start();

   if(!$_SESSION['log']){
   	header("Location:Startpage.php");
   	die;
   };

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class ="login">
<div class="input">
<h1> You are now logged in!</h1>
<form action="Startpage.php">
<button>Logout</button>
</form>
</div>
</div>

</body>

</html>