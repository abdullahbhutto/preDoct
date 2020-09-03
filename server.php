<?php

session_start();


//Initializing Variables


$dname      = "" ;
$desig      = "" ;
$dusername  = "" ;
$password_1 = "" ;
$password_2 = "" ;



$errors = array();



//Connect to Database



$db = mysqli_connect('localhost','root', '' , 'predoct') or die("Could not connect to database") ;




//Register Users

$dname      = mysqli_real_escape_string($db,$_POST['dname']) ;

$desig      = mysqli_real_escape_string($db,$_POST['desig']) ;

$dusername  = mysqli_real_escape_string($db,$_POST['dusername']) ;

$password_1 = mysqli_real_escape_string($db,$_POST['password_1']) ;

$password_2 = mysqli_real_escape_string($db,$_POST['password_2']) ;


//form validation


if (empty($dname))      {array_push($errors, "Doctor Nmae is required")};

if (empty($desig))      {array_push($errors, "Designation is required")};

if (empty($dusername))  {array_push($errors, "Username is required")};

if (empty($password_1)) {array_push($errors, "Password is required")};

if (empty($password_2)) {array_push($errors, "Password is required")};

if($password_1 != $password_2) {array_push($errors,"Password don't match")};





//check database for existing user with same username 


$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1" ;

$results  = mysqli_query($db,$user_check_query);
$user     = mysqli_fetch_assoc($result);


if($user) {
	if($user['username'] === $username){array_push($errors, "Username is already exists");}
	if($user['email']    === $email){array_push($errors, "Email Id is already Registered");}
}



//Register the user if no error

if(count($errors)==0){

$password = md5($password_1);  //this will encrypt password
$query = "INSERT INTO user (username,email,password) VALUES ( '$username' , '$email' , '$password' ) " ;

mysqli_query($db,$query);

$_SESSION['username'] = $username;

$_SESSION['sucess']   = "You are now logged in";


header('location:index.php');

}

?>