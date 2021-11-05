<!DOCTYPE html>
<script src="db.php"></script>
<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="login.css">
        <script src="db.php"></script>
    </head>
    <body>
        <form action="log.php" method="post">
       
            <div class="container">
                <h1>Login</h1>
                <p>Email</p>
                <input type="text" placeholder="Enter email" name="email" id="email" required><br>
                <p>Password</p>
                <input type="text" placeholder="Enter password" minlength="6" name="pwd" id="pwd" required><br><br>
                
                <button type="submit" style="float: right;" name="login">Submit</button><br><br>
                <a href="register.php">Not registered? Register</a>
            </div>
        </form>
    </body>
</html>