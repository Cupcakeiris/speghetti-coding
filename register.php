<!DOCTYPE html>
<html>
    <head>
        
        <title>Register</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="login.css">
        <script src="db.php"></script>

    </head>
    <body>

            <form action="reg.php" method="post">
            <div class="container">
                <h1>Register</h1>
                <p>Name</p>
                <input type="text" placeholder="Enter your name" name="fname" id="fname" required><br>
                <p>Surname</p>
                <input type="text" placeholder="Enter your surname" name="lname" id="lname" required><br>
                <p>Email</p>
                <input type="text" placeholder="Enter your email" name="email" id="email" required><br>
                <p>Password</p>
                <input type="text" placeholder="Enter your password" minlength="6" name="pwd" id="pwd" required><br>
                <p>Confirm password</p>
                <input type="text" placeholder="Enter your password" minlength="6" name="confpwd" id="confpwd" required><br>

                <button style="float: right;" type="submit" name="register">Submit</button><br><br>
                <a href="login.php">Already have an account? Login</a>
            </div>

        </form>
    </body>
</html>