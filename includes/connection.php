<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=nacossy", "root","Spellingbee@1");
}catch(PDOException $e){
  $error = $e->getMessage();
}
 ?>
