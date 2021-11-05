<?php
require_once "script/pdocrud.php";

$pdocrud = new PDOCrud();
echo $pdocrud->dbTable("book")->render();
?>