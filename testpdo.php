<?php
$servername = "localhost";
$username = "root";
$password = "root";
$imya= "imya";//имя формы
try 
{
  $conn = new PDO("mysql:host=$servername;dbname=PDO", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO css ( `username`) VALUES ( '".$imya."')";//подключение к определенной бд
  $conn->exec($sql);
echo 'Огонь, сохранено';
}  

catch(PDOException $e) {
  echo $sql . $e->getMessage();
						} 
$conn = null ?>
