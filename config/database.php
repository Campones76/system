<?php
$databaseHost = 'localhost';
$databaseName = 'testy';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$conn){
	die("ERROR: Connection failed: ". mysqli_connect_error());
}

?>
