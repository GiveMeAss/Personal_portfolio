<?php
	
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "7596964186";
	$dbname = "portfolio";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$name = $_POST["name"];
	$Email = $_POST["email"];
	$number = $_POST["number"];
	$suggestion = $_POST["suggestion"];
	

	$sql = "INSERT INTO message(Name, Email, phnumber, Suggestion) VALUES ('$name','$Email','$number','$suggestion')"; 

	if($conn -> query($sql) === TRUE){
		echo "<script>alert('Thanks $name')</script>";
	}
	else{
		echo "error: " . $sql . "<br>" . $conn->error ; 
	}
?>
