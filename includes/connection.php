<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=nacossy", "root","");
}catch(PDOException $e){
  $error = $e->getMessage();
}
 ?>
