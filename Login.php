<?php

//använder include för att inkludera sidan connect. 
include 'Connect.php';

$username = $_POST['username'];
$pw = $_POST['pw'];


$sql = "SELECT * FROM newuser WHERE username = '$username' AND pw ='$pw'";

$result = mysqli_query($conn, $sql);


if (!$row = mysqli_fetch_assoc($result)){

	echo "Wrong username or password";
}else {
	$_SESSION['id'] = $row['id']; 
	echo "You are now logged in!";
}

