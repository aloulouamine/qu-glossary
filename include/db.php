<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "qu_glossary";
try{
	// Create connection
	$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
	// Check connection
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch (PDOException $e){
	echo 'connection à MySQL impossible:',$e->getMessage();
	exit();
}
?>