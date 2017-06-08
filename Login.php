<?php

//använder include för att inkludera sidan connect. 
include 'Connect.php';

//Gör 2 variabler som jag sätter till vad användare skriver in
//med hjälp av $_POST.
//Lägger till FILTER_SANITIZE för att förhindra sql attacker, så man inte kan skriva speciella tecken i sökfältet.
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);

//Gör variablen $sql där jag använder kommandot SELECT från mitt table "newuser" för att få ut användaren.
$sql = "SELECT * FROM newuser WHERE username = '$username' AND pw ='$pw'";

//kör en query på min databas och sätter $result till värdet
$result = mysqli_query($conn, $sql);

//Här kollar jag om användaren har skrivit in rätt username eller password, kollar då om $row skilljer sig från $result
//har användaren skrivit in rätt så blir man tagen till en annan sida och då inloggad
//skriver man in fel så displayas "Wrong username or password"
if (!$row = mysqli_fetch_assoc($result)){

	echo "Wrong username or password";
}else {
	//Sparar username och pw.
	$_SESSION['username'] = $row['username'];
	$_SESSION['pw'] = $row['pw']; 
    header ("Location: loggedin.php");
}

?>