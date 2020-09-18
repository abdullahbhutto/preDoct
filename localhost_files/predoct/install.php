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


	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS `patient_data` (
		`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`gender` varchar(20) NOT NULL,
		`fname` varchar(100) NOT NULL,
		`lname` varchar(100) NOT NULL,
		`patientemail` varchar(50) NOT NULL,
		`contactno` varchar(50) NOT NULL,
		`age` varchar(100) NOT NULL,
		`weight` varchar(20) NOT NULL,
		`reason` varchar(200) NOT NULL,
		`reffer` varchar(100) NOT NULL,
		`allergies` varchar(300) NOT NULL,
		`diseases` varchar(300) NOT NULL,
		`location` varchar(100) NOT NULL,
		`medicines` varchar(200) NOT NULL,
		`exercise` varchar(50) NOT NULL,
		`alcohol` varchar(50) NOT NULL,
		`smoking` varchar(50) NOT NULL,
		`caffeine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
	echo "Table patient_data created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}
		
	$conn->close();
?>