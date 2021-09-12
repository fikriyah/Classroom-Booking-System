<?php
	
	
	session_start();
	$server = "localhost";
	$user   = "root";
	$pass   = "";
	$dbName = "library_class_project";
	$db = new mysqli($server,$user,$pass,$dbName);
	$date = date("Y-m-d");

?>