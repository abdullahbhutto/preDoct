<?php
session_start();
	//Connect to database
    $servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "predoct";
    
	$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
 
$doctorname = mysqli_real_escape_string($conn, $_POST["doctorname"]);
$designation = mysqli_real_escape_string($conn, $_POST["designation"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$passwordct = mysqli_real_escape_string($conn, $_POST["passwordct"]);
$passwordctchk = mysqli_real_escape_string($conn, $_POST["passwordctchk"]);

if($passwordct != $passwordctchk){
die("Passwords did not match");
}

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `doctor_login` WHERE email='$email' LIMIT 1";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 0){
// Attempt insert query execution
$sql = "INSERT INTO doctor_login (doctorname, designation, email, passwordct) VALUES ('$doctorname', '$designation', '$email', '$passwordct')";
if($conn->query($sql) === true){

    $_SESSION['doctorname'] = $doctorname;
    $_SESSION['success'] = "You have successfully registered";
    
    header('Location: Doctor_login.php');
    

} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
}
else{
    echo "Email Already Exists!";
}
// Close connection
$conn->close();
?>