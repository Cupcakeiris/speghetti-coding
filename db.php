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
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);

if(empty($result)) {
                $query = "CREATE TABLE student(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    fname VARCHAR(30),
                    lname VARCHAR(30),
                    email VARCHAR(50),
                    pwd VARCHAR(30)
                    )";
                    
            if (mysqli_query($conn, $query)) {
                        echo "Table created successfully";
                      } else {
                        echo "Error creating table: " . $conn->error;
                      }

            $result = mysqli_query($conn, $query);
}


$query = "SELECT * FROM book";
$result = mysqli_query($conn, $query);


if(empty($result)) {
    $query = "CREATE TABLE book(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        code VARCHAR(50),
        title VARCHAR(255) NOT NULL,
        author VARCHAR(255) NOT NULL,
        publishedYear VARCHAR(50),
        imageLink VARCHAR(255),
        email VARCHAR(30)
        )";
    
    if (mysqli_query($conn, $query)) {
            echo "Table created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }

    $result = mysqli_query($conn, $query);
}

$query = "SELECT * FROM reserve";
$result = mysqli_query($conn, $query);

if(empty($result)) {
    $query = "CREATE TABLE reserve(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        code VARCHAR(50),
        email VARCHAR(30)
        )";
    
    if (mysqli_query($conn, $query)) {
            echo "Table created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }

    $result = mysqli_query($conn, $query);
}

?>
