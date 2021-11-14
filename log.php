<?php 
//-----------------------------------------

include 'db.php'; //importing from the another php file
session_start(); //starts session to check user's authorization
//login

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$admin = 'AdminV'; //admin's login info
$adminpwd = 'Qqwerty1!';

$result = mysqli_query($conn, "SELECT * FROM student WHERE email='$email' AND pwd = '$pwd'"); //checks if row/account with input datas exist


if (!$result)
    {
        die('Error: ' . mysqli_error($conn));
    }

if (isset($_POST["login"])){ //searches for the input account
    if(mysqli_num_rows($result) > 0){
            echo 'Loginned successfully';
            $temp = mysqli_query($conn, "SELECT fname FROM student WHERE email='$email'");
            while ($row = $temp->fetch_assoc()) {
                $_SESSION['user'] = $row['fname']; //session starts with user's name and email
                $_SESSION['email'] = $email;
            }
            if(isset($_SESSION['user'])){ //adds to global session
                    echo '<p>Welcome '.$_SESSION['user'].'</p>';
                echo '<a href="index.php">Return home</a>';}
        } else{ 
            echo 'No account was found'; 
            
        }
}

if (isset($_POST["logout"])){ //logout proccess
    session_unset();
    echo 'Successfully logged out. Return <a href="index.php">home</a>';
}

?>
