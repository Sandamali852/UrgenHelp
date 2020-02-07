<?php
	include('conn.php');
	session_start();

	$username = $_SESSION['username'];
	
	$firstname=$_POST['firstname'];
	// $lastname=$_POST['lastname'];
	// $lastname=$_SESSION['username'];
	$Telephone=$_POST['Telephone'];
	
	mysqli_query($conn,"insert into user (firstname, lastname, Telephone) values ('$firstname', '$username', '$Telephone')");
	header('location:index.php');

?>