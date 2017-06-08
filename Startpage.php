<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php 
//använder include för att inkludera sidan connect. 
include 'Connect.php'

//här gör jag min startsida använder POST för att skicka infon användaren skriver in.
?>
<div class ="login">
<div class="input">
<form action="Login.php" method="POST" Login>
	<input type="text" name="username" placeholder="Username"><br>
	<input type="Password" name="pw" placeholder="Password"><br>
	<button>LOGIN</button>
</form>
</div>
</div>

</body>

</html>