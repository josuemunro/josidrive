<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JosiDrive Admin</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header">
  <a href="http://127.0.0.1:8080">
    <img class="logo" src="logo.png">
  </a>
  Admin Page
</div>
<div class="parent">
<table>
<?php
  include 'dbConfig.php';
    
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
    echo "<tr><td>".$row["name"]."</td><td>".$row["datatype"]."</td>
    <td><a class='download' target='_blank' href='delete.php?id=".$row['id']."'>
    Delete
    </a></td></tr>";
  }
?>
</table>
</div>
</body>
</html>
