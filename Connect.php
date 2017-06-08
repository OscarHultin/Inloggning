<?php
//skapar min connection mellan programmet och databasen $conn
//använder mig av metoden mysqli_connect
$conn = mysqli_connect("localhost", "root", "", "login");

//Skapar en if-sats att om connection fail med databasen så ska programmet dö
//och då displayas också ett felmeddelande
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>