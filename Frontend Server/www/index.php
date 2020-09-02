<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ligma</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header">
  <a href="index.php">
    <img class="logo" src="logo.png">
  </a>
  <a href="upload.html">Upload</a>
</div>
<form action="uploader.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="myfile">
    <button name="btn">Upload ya stuff</button>
</form>
<div class="parent">
<?php
  include 'dbConfig.php';
    
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
  echo "<div class='box'>
    <embed src='data:".$row['datatype'].";base64,".base64_encode($row['data'])."'/>
    <a class='download' target='_blank' href='download.php?id=".$row['id']."'>
      Download ".$row['name']."
    </a>
  </div>";
}

?>
</div>

</body>
</html>
