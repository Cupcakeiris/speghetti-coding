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



//login
$log_email = $_POST['log_email'];
$log_pwd = $_POST['log_pwd'];
$result = "SELECT * FROM 'student' WHERE 'email'='$log_email' AND 'pwd'='$log_pwd'"; //checks if row/account with input datas exist

if (isset($_POST["login"])){
    if($result != FALSE){
            echo 'Loginned successfully';
        }
    }




$conn->close();
?>
