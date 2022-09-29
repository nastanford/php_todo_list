<?php 
  include 'config.php';

// connect to mysql pdo database
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


?>