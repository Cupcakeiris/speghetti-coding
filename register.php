<?php 
$dbName = 'library';
//connect to the db
$conn = new mysqli('localhost', 'root', '');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

//make it as the current db
if (!mysqli_select_db($conn,$dbName)){
    $sql = "CREATE DATABASE ".$dbName;
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    }else {
        echo "Error creating database: " . $conn->error;
    }
} 

//tables
$sql = "CREATE TABLE student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30),
    lname VARCHAR(30),
    email VARCHAR(50),
    pwd VARCHAR(30)
    )";

$table = 'student';

if (!$table) {
    if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }
}





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

$conn->close();
?>