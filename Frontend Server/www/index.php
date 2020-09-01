<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ligma</title>
</head>
<body>
<h1>Yeah the boys</h1>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
Choose a file to upload: <input name="file" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
<?php
$servername = "192.168.3.11";
$username = "webuser";
$password = "insecure_db_pw";

try {
  $conn = new PDO("mysql:host=$servername;dbname=josidrive", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
  echo "<p>".$row["path"]."</p><p>".$row["name"]."</p>";
}
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>
