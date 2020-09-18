<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <title>Assistant Login</title>
    <link rel="stylesheet" type="text/css" href="Assistant_loginstyle.css" />
</head>


<body>

    <div class="parent-div">

        <h1>For Patient</h1>

        <div class="login-box">
<form action="assistant_authen.php" method="POST">
            <div class="textbox">
                
                <input type="email" placeholder="Username" name="email" value="">

            </div>
            
            <br />

            <div class="textbox">

                <input type="password" placeholder="Password" name="passwordst" value="">

            </div>

            <br/>
            <button type="submit" value="Submit">Sign In</button>
            <input type="reset" value="Reset"/>
    </form>
            
        </div>

    </div>
</body>

</html>