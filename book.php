<?php
include('db.php');
include('log.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>NIS Library</title>
    <link rel="stylesheet" href="index.css">
    <script src="db.php"></script>


    <table border = '1' align = 'center'> <caption>Books</caption>   
<?php
  $query = "SELECT * FROM book";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($result))
  {
  echo '<tr>';
      echo '<td>' . $row['title'] . '</td>';
      echo '<td>' . $row['author'] . '</td>';
      echo '<td>' . $row['publishedYear'] . '</td>';
      echo '<td>' .
      "<img src='".$row['imageLink']."' width = '150px'>"
      . '</td>';
      echo '</tr>';
  }
?>
</table>



    <body>
      <br>
      <a href="index.php">Home</a> 
    </body>
  </head>
</html>