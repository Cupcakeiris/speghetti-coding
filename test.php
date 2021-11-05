<?php
include('db.php'); //importing from the another php file
if(isset($_SESSION[''])){
    echo 'Hello';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
    </head>
    <body>
        <form action="test.php">
        <h1>check if ur authorized: </h1>
        <input type="submit">
    </form>
    </body>
</html>