<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";

	// Create connection
	$db = new mysqli($servername, $username, $password);

	// Check connection
	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	} 

	// Create database
	$sql = "CREATE DATABASE technotech";
	if ($db->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $db->error;
	}

	// sql to create table
	$sql = "CREATE TABLE News (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    echo "Table news created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$db->close();
?>