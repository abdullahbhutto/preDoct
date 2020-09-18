<?php
session_start();
//Connect to database
$servername = "localhost";
$username = "root";        //put your phpmyadmin username.(default is "root")
$password = "";            //if your phpmyadmin has a password put it here.(default is "root")
$dbname = "predoct";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . $conn->connect_error);
}

$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$patientemail = mysqli_real_escape_string($conn, $_POST["patientemail"]);
$contactno = mysqli_real_escape_string($conn, $_POST["contactno"]);
$age = mysqli_real_escape_string($conn, $_POST["age"]);
$weight = mysqli_real_escape_string($conn, $_POST["weight"]);
$reason = mysqli_real_escape_string($conn, $_POST["reason"]);
$reffer = mysqli_real_escape_string($conn, $_POST["reffer"]);
$allergies = mysqli_real_escape_string($conn, $_POST["allergies"]);
$diseases = mysqli_real_escape_string($conn, $_POST["diseases"]);
$location = mysqli_real_escape_string($conn, $_POST["location"]);
$medicines = mysqli_real_escape_string($conn, $_POST["medicines"]);
$exercise = mysqli_real_escape_string($conn, $_POST["exercise"]);
$alcohol = mysqli_real_escape_string($conn, $_POST["alcohol"]);
$smoking = mysqli_real_escape_string($conn, $_POST["smoking"]);
$caffeine = mysqli_real_escape_string($conn, $_POST["caffeine"]);


$sql = "INSERT INTO patient_data (gender,fname,lname,patientemail,contactno,age,weight,reason,reffer,allergies,diseases,location,medicines,exercise,alcohol,smoking,caffeine) VALUES ('$gender','$fname','$lname','$patientemail','$contactno','$age','$weight','$reason','$reffer','$allergies','$diseases','$location','$medicines','$exercise','$alcohol','$smoking','$caffeine')";
    if ($conn->query($sql) === true) {

        $_SESSION['success'] = "You have successfully registered";

        header('Location: Doctor_login.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }