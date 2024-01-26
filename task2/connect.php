<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$tab = "class";
	
	$conn =  new mysqli($servername, $username, $password,$tab);
	
	if ($conn->connect_error) {
		die ("Connection failed: " . $conn->connect_error);
		echo '<br>';
		echo 'could not connect to the database.';
	} else {
		echo '<br>Successfully connected to the database.<br><br>'; 
	}
?>