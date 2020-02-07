<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	//$lastname=$_POST['lastname'];
	$Telephone=$_POST['Telephone'];
	
	mysqli_query($conn,"update user set firstname='$firstname', Telephone='$Telephone' where userid='$id'");
	header('location:index.php');

?>