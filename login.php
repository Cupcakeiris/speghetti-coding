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
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$result = mysqli_query($conn, "SELECT * FROM student WHERE email='$email' AND pwd = '$pwd'"); //checks if row/account with input datas exist

if (!$result)
    {
        die('Error: ' . mysqli_error($conn));
    }

if (isset($_POST["login"])){
    if(mysqli_num_rows($result) > 0){
            echo 'Loginned successfully';
        } else{ 
            echo 'No account was found'; 
            
        }
}

    $conn->close();

?>