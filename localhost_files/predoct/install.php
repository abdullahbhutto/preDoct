<?php
	//Connect to database
    $servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Create database
	$sql = "CREATE DATABASE predoct";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $conn->error;
	}

	echo "<br>";

	$dbname = "predoct";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS `doctor_login` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`doctorname` varchar(100) NOT NULL,
			`designation` varchar(100) NOT NULL,
			`email` varchar(50) NOT NULL,
			`passwordct` varchar(50) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	if ($conn->query($sql) === TRUE) {
	    echo "Table doctor_login created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$sql = "CREATE TABLE IF NOT EXISTS `assistant_login` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`assistantname` varchar(100) NOT NULL,
			`email` varchar(50) NOT NULL,
			`passwordst` varchar(50) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	if ($conn->query($sql) === TRUE) {
	    echo "Table assistant_login created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}
		
	$conn->close();
?>