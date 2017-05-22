<?php
	require_once( __DIR__ . "/class.database.php" );
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "test";
	$database = new Database($host,$user,$pass,$dbname);
?>