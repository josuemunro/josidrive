<?php
$servername = "192.168.3.11";
$username = "webuser";
$password = "insecure_db_pw";

try {
  $conn = new PDO("mysql:host=$servername;dbname=josidrive", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>