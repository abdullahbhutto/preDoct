﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <title>Assistant Registration</title>
    <link rel="stylesheet" type="text/css" href="AssistantRegistrationStyle.css" />
</head>


<body>

    <div class="parent-div">

        <h1>NEW REGISTRATION</h1>
        <h2>Create your account.It's free and only take a minute.</h2>
        <div class="login-box">
<form action="manage_assistant.php" method="POST" >
            <div class="textbox">
                <input type="text" placeholder="Assistant Name" name="assistantname" value="" required>
            </div>

            

            <br />

            <div class="textbox">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <br />

            <div class="textbox">
                <input type="password" placeholder="Password" name="passwordst" value="" required>
            </div>

            <br />

            <div class="textbox">
                <input type="password" placeholder="Confirm Password" name="passwordstchk" value="" required>
            </div>


            <button type="submit" value="Submit" name="button">Register Now</button>
        </form>
            <br />
            <br />
            <br />
            <h2>Already have an Account ?<a href="Assistant_login.php">  Sign In </a></h2>



        </div>

    </div>
</body>

</html>