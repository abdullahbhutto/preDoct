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
 
$assistantname = mysqli_real_escape_string($conn, $_POST["assistantname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$passwordst = mysqli_real_escape_string($conn, $_POST["passwordst"]);
$passwordstchk = mysqli_real_escape_string($conn, $_POST["passwordstchk"]);

if($passwordst != $passwordstchk){
die("Passwords did not match");
}

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `assistant_login` WHERE email='$email' LIMIT 1";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 0){
// Attempt insert query execution
$sql = "INSERT INTO assistant_login (assistantname, email, passwordst) VALUES ('$assistantname', '$email', '$passwordst')";
if($conn->query($sql) === true){

    $_SESSION['assistantname'] = $assistantname;
    $_SESSION['success'] = "You have successfully registered";
    
    header('Location: Assistant_login.php');
    

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