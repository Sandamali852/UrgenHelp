<?php

$conn = mysqli_connect("localhost","root","","malla");
 
if (!$conn) {
	
	die("Connection failed: " . mysqli_connect_error());
}
 
?>