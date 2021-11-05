<?php 
include 'db.php'; //importing from the another php file
//register
$fname = $_POST['fname'];
$lname  = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$confpwd = $_POST['confpwd'];

$pass = 0;

if ($_POST['pwd']!= $_POST['confpwd'])
{
     echo 'Password does not match';
}
else{
$pass += 1; //if all requirements are satisfied user can pass registration
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ //checks email format
    echo 'Invalid email format';
}
else{
    $pass += 1;
}


if(isset($_POST["register"]) && $pass == 2){//checks if the button with name "register" is pressed
    $sql = "INSERT INTO student(fname, lname, email, pwd)
    VALUES ('$fname', '$lname', '$email', '$pwd')";
    if ($conn->query($sql) === TRUE) {
        echo "Row created successfully";
        } else {
        echo "Error: " . $conn->error;
        }
    
}

?>
