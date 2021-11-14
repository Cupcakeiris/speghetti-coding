<?php
include('db.php');
include('log.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>NIS Library</title>
    <script src="db.php"></script>
    <link rel="stylesheet" href="index.css">

<style>
.book {
    border-collapse: collapse;
    width: 100%;
  }
  
.book td, .books th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
.book tr:nth-child(even){background-color: #f2f2f2;}
  
.book tr:hover {background-color: #ddd;}
  
.book th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }



  * {box-sizing: border-box;}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}
</style>

</head>
    
<body>
<div class="topnav">
  <a class="active" style="margin: 0px" href="index.php">Home</a>
  <div class="search-container">
    <form action="book.php" method="post" name="search">
      <input type="text" placeholder="Enter book name" name="search">
      <button type="submit">&#x1F50E;</button>
    </form>
  </div>
</div>


<form action="reserve.php" method="post">
<table class="book">
    <tr>   
    <th>Title</th>
    <th>Author</th>
    <th>Year</th>
    <th>Cover</th>
    <th>Reserve</th>
    </tr> 


<?php
  $query = "SELECT * FROM book";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($result)) //shows all rows in table
  {
    echo '<div class="book">';
      echo '<tr>';
      echo '<td>'. $row['title'] . '</p> </td>';
      echo '<td>' . $row['author'] . '</td>';
      echo '<td>' . $row['publishedYear'] . '</td>';
      echo '<td>' .
      "<img src='".$row['imageLink']."' width = '100px'>"
      . '</td>';
      echo '<td> <button name='.$row['code'].'>Reserve</button></td>'; //when making reservation each button reserves corresponding book row
      echo '</tr>';
    echo '</div>';
  }
?>


</table>
</form>
    </body>
  
</html>