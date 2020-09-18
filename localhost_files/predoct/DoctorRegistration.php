<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Doctor Registration</title>
    <link rel="stylesheet" type="text/css" href="DoctorRegistrationStyle.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <form action="manage_doctor.php" method="POST">

        <div class="parent-div">

            <h1>NEW REGISTRATION</h1>
            <h2>Create your account.It's free and only take's a minute.</h2>

            <div class="login-box">

                <div class="textbox">
                    <input type="text" placeholder="Doctor Name" name="doctorname" value="" required>
                </div>

                <br />

                <div class="textbox">
                    <input type="text" placeholder="Designation" name="designation" value="" required>
                </div>

                <br />

                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" value="" required>
                </div>
                <br />

                <div class="textbox">
                    <input type="password" placeholder="Password" name="passwordct" value="" id="myInput" required>
                </div>
                <input type="checkbox" onclick="myFunction()">Show password
                <div class="textbox">
                    <input type="password" placeholder="Password" name="passwordctchk" value="" id="myInput" required>
                </div>

                <br />

                <!-- <div class="textbox">
                <input type="password" placeholder="Confirm Password" name="passwordctchk" value="" required>
                
            </div> -->

                <button type="submit" value="Submit">Register Now</button>
                <br />
                <br />
                <br />
                <h2>Already have an Account ?<a href="Doctor_login.php"> Sign In </a></h2>



            </div>

        </div>
    </form>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>