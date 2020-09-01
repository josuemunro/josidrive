<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ligma</title>
</head>
<body>
<h1>Yeah the boys</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
<?php
  include 'dbConfig.php';
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
  echo "<p>".$row["name"]."</p><p>".$row["datatype"]."</p>";
}

?>
</body>
</html>
