<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <title>Doctor Login</title>
    <link rel="stylesheet" type="text/css" href="Doctorstyle.css" />
</head>


<body>

    <div class="parent-div">

      <h1>For Doctor </h1>
<form id= "myForm" action="authen_login.php" method="POST">
        <div class="login-box">

            <div class="textbox">
                <input type="email" placeholder="Username"  name="email" value="">
            </div>

            <br />

            <div class="textbox">
                <input type="password" placeholder="Password" name="passwordct" value="">
            </div>

            <br />

            <button type="submit" value="Submit">Sign In</button>
            <input type="reset" value="Reset"/>

        </div>
        </form>

    </div>
</body>

</html>