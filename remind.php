

<?php
include('db.php');
include 'log.php';

  $query = "SELECT * FROM reserve";
  $result = mysqli_query($conn, $query);

  


  while($row = mysqli_fetch_array($result))
  {
    $attribute = $row['email'];
    $attribute = str_replace(".", "", $attribute);
    if (isset($_POST[$attribute])){
        echo "Successfully sent reminder";
        
        break;   

    }
}

?>
