<?php
include('db.php');
include 'log.php';

  $query = "SELECT * FROM book";
  $result = mysqli_query($conn, $query);

  


  while($row = mysqli_fetch_array($result))
  {
    if (isset($_POST[$row['code']])){
        $code = $row['code'];
        $email = $_SESSION['email'];
        $res = mysqli_query($conn, "SELECT * FROM reserve WHERE email='$email' AND code='$code'");
        if(mysqli_num_rows($res) < 1){
        
            $sql = "INSERT INTO reserve(code, email)
                    VALUES ('$code', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Row created successfully for ". $_SESSION['email'];
            } else {
                echo "Error: " . $conn->error;
            }
            break;
        }
        else{echo 'You already reserved this book. Ask administartion to remove it for you';}
    }
  }
?>