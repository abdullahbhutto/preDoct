<?php

session_start();

if(isset($_SESSION['email'])){

    $_SESSION['msg'] === "You must login first to see this page";
    header('Location: Doctor.html');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['emai']);
    header('Location: Doctor.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($_SESSION['success'])) : ?>
    <?php endif ?>
</head>
<body>
  <p>Hello This is what A registered Doctor Would see !</p>  
</body>
</html>


