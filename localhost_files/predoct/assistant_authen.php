<?php  
 require('connectDB.php');

if (isset($_POST['email']) and isset($_POST['passwordst'])){
	
// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['passwordst'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `assistant_login` WHERE email='$username' and passwordst='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

// echo "Login Credentials verified";
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header('Location: Assistant.php');
}else{
//echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "Invalid Login Credentials";
}
}
?>