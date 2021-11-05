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


    <body>
      <div class="container">
        <img id='library' src="res/library.jpg">
        <div class="top-text">
          <h1>Welcome to NIS Library</h1>
          <a href="#">Home</a>
          <a href="test.php">Books</a>
          <a href="#">Contacts</a>
          
          <?php
            if(isset($_SESSION['user'])){
              echo '<a href="logout.php">'.$_SESSION['user'].'</a>';
          }else{
            echo '<a href="login.php">'.'Profile'.'</a>';
          }
          ?>  
        </div>
      </div>
      
      <div class="container" style="margin-left: 20px; margin-right: 20px;">
        <h3>New books</h3>
        <div class="row">
          <div class='preview'>
            <img src='res/abay.jpg'>
            <a href="#">Abay Joly 1</a>
          </div>
          <div class='preview'>
            <img src='res/prince.jpg'>
            <a href="#">The Little Prince</a>
          </div>
          <div class='preview'>
            <img src='res/ring.jpg'>
            <a href="#">The Lord of Rings</a>
          </div>   
          <div class='preview'>
            <img src='res/body.jpg'>
            <a href="#">The Body on the Beach</a>
          </div> 
          <div class='preview'>
            <img src='res/diary.png'>
            <a href="#">The Getaway</a>
          </div>


        <br>
        </div>
        <br>
        <h3>About NIS Library</h3>
        <div style="overflow: auto;">
          <p>This site can be used by NIS CBD Almaty's students to book a book for a planned day. After getting a book from the library
            you can check deadline expiration and get notification about it. The site is very helpful to save time and easy to use. You can
            suggest your ideas to our contacts. We hope you will enjoy using our digital library.
          </p>
      </div>

    </body>
  </head>
</html>