<?php
	$conn = mysqli_connect("remotemysql.com", "jMQIqBhU5D", "HMXnAXHtkf", "jMQIqBhU5D");
	$charset = 'utf8mb4';
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>