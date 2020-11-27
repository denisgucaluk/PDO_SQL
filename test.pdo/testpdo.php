<?php
$servername = "localhost";
$username = "username";
$password = "password";
$imya = "imya";
try 
{
  $conn = new PDO("mysql:host=$servername;dbname=test_pdo", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `username` (`id`, `username`) VALUES (NULL, '$imya')";
  $conn->exec($sql);
echo 'Огонь, сохранено';
}  

catch(PDOException $e) {
  echo $sql . $e->getMessage();
						} 
$conn = null ?>
