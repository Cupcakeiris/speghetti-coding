<?php
include('db.php');
include('log.php'); 
?>

<!DOCTYPE html>
<meta charset="utf-8" />
<html>
  <head>
    <title>NIS Library</title>
    <script src="db.php"></script>
    <link rel="stylesheet" href="index.css">

    <script>  //Searchbar
function search() {
  let input, table, tr, td, value;
  input = document.getElementById("searchbar").value.toUpperCase();
  table = document.getElementById("email");
  tr = table.getElementsByTagName("tr");
  for (let i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      value = td.textContent || td.innerText;
      if (value.toUpperCase().indexOf(input) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

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
      <input type="text" placeholder="Enter student email" name="search" id="searchbar" onkeyup="search()">
    </form>
  </div>
</div>


<form action="remind.php" method="post">
<table class="book" id="email">
    <tr>   
    <th>Student email</th>
    <th>Code</th>
    <th> </th>
    </tr> 


<?php
  $query = "SELECT * FROM reserve";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($result)) //shows all rows in table
  {
      $attribute = $row['email']; //you cannot access to name which has dot in it 
      echo '<div class="book">';
      echo '<tr>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td>'. $row['code'] . '</p> </td>';
      echo '<td> <a href="mailto:'.$attribute.'?subject=Book deadline">Send reminder</a></td>'; //opens gmail tab to send message
      echo '</tr>';
    echo '</div>';
  }
?>


</table>

</form>
    </body>
  
</html>

